<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user_id = $request->input('email_or_phone') ?? $request->input('email');

        $validator = Validator::make($request->all(), [
            'email_or_phone' => 'required_without:email',
            'email' => 'required_without:email_or_phone|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'The provided credentials are incorrect.', 'errors' => $validator->errors()], 403);
        }

        $user = User::where('email', $user_id)
            ->orWhere('contact', $user_id)
            ->first();

        if ($user) {
           
            if (Hash::check($request->password, $user->password)) {
                
                $otp = rand(1000, 9999);
                $expiresAt = now()->addMinutes(10);

                DB::table('otp_logins')->updateOrInsert(
                    ['email' => $user->email],
                    ['otp' => $otp, 'expires_at' => $expiresAt, 'created_at' => now()]
                );

                try {
                    Mail::to($user->email)->send(new \App\Mail\otpLoginMail($otp));
                } catch (\Exception $e) {
                    return response()->json(['errors' => [['code' => 'config-missing', 'message' => $e->getMessage()]]], 400);
                }

                return response()->json(['message' => 'OTP sent to your email. Please verify to complete login.'], 200);
            }

            return response()->json(['message' => 'The provided credentials are incorrect.'], 403);
        }

        return response()->json([
            'errors' => [['code' => 'auth-001', 'message' => 'Invalid credentials.']],
        ], 401);
    }

    // register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'contact' => 'required|numeric|digits:10',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|string|min:8|same:password',

        ]);

        if ($request->password != $request->password_confirmation) {
            return redirect()->back()->withErrors(['password_confirmation' => 'The password confirmation does not match.'])->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('AuthToken')->plainTextToken;
        return response()->json(["message" => "User registered successfully.", 'token' => $token, "data" => $user], 201);
    }

    // get user details
    public function user_details(Request $request)
    {
        $user = $request->user();
        return response()->json(["message" => "User Details.", "data" => $user], 200);

    }

    // logout
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }

    // facebook login
    public function redirectToFacebook()
    {
        return response()->json([
            'url' => Socialite::driver('facebook')->stateless()->redirect()->getTargetUrl(),
        ]);
    }

    public function handleFacebookCallback(Request $request)
    {
        try {
            $user = Socialite::driver('facebook')->stateless()->user();

            $findUser = User::where('facebook_id', $user->id)->first();

            if ($findUser) {
                $token = $findUser->createToken('YourAppName')->plainTextToken;
                return response()->json(['token' => $token]);
            } else {
                $newUser = User::updateOrCreate(
                    ['email' => $user->email],
                    [
                        'name' => $user->name,
                        'facebook_id' => $user->id,
                        'password' => bcrypt('123456dummy'),
                    ]
                );

                $token = $newUser->createToken('YourAppName')->plainTextToken;
                return response()->json(["message" => "User logged in successfully.", 'user' => $user, 'token' => $token], 200);
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // google login

    public function redirectToGoogle()
    {
        return response()->json([
            'url' => Socialite::driver('google')->stateless()->redirect()->getTargetUrl(),
        ]);
    }

    public function handleGoogleCallback(Request $request)
    {
        $user = Socialite::driver('google')->userFromToken($request->input('access_token'));

        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            Auth::login($existingUser);
            return response()->json(["message" => "User logged in successfully.", 'user' => $user, 'token' => $token], 200);
        } else {
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->save();
            Auth::login($newUser);
            return response()->json(["message" => "User logged in successfully.", 'user' => $user, 'token' => $token], 200);
        }
    }

    public function socialLogin(Request $request)
    {
        if (!$request->provider) {
            return response()->json([
                'result' => false,
                'message' => 'User not found',
                'user' => null
            ]);
        }

        switch ($request->social_provider) {
            case 'facebook':
                $social_user = Socialite::driver('facebook')->fields([
                    'name',
                    'first_name',
                    'last_name',
                    'email'
                ]);
                break;
            case 'google':
                $social_user = Socialite::driver('google')
                    ->scopes(['profile', 'email']);
                break;
            default:
                $social_user = null;
        }
        if ($social_user == null) {
            return response()->json(['result' => false, 'message' => 'No social provider matches', 'user' => null]);
        }
        
        $social_user_details = $social_user->userFromToken($request->access_token);

        if ($social_user_details == null) {
            return response()->json(['result' => false, 'message' => 'No social account matches', 'user' => null]);
        }

        $existingUserByProviderId = User::where('provider_id', $request->provider)->first();

        if ($existingUserByProviderId) {
            $existingUserByProviderId->access_token = $social_user_details->token;
            $existingUserByProviderId->save();
            return $this->loginSuccess($existingUserByProviderId);
        } else {
            $existing_or_new_user = User::firstOrNew(
                [['email', '!=', null], 'email' => $social_user_details->email]
            );

            $existing_or_new_user->role = 'user';
            $existing_or_new_user->status = 1;
            $existing_or_new_user->provider_id = $social_user_details->id;

            if (!$existing_or_new_user->exists) {
                $existing_or_new_user->name = $social_user_details->name;
                $existing_or_new_user->email = $social_user_details->email;
                $existing_or_new_user->email_verified_at = date('Y-m-d H:m:s');
            }

            $existing_or_new_user->save();

            return $this->loginSuccess($existing_or_new_user);
        }
    }

}
