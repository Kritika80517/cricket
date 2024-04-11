<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Hash;
use Validator;
use Str;
use Exception;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        if($request->has('email_or_phone')) {
            $user_id = $request['email_or_phone'];
            $validator = Validator::make($request->all(), [
                'email_or_phone' => 'required',
                'password' => 'required|min:8'
            ]);
        }else{
            $user_id = $request['email'];
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required|min:8'
            ]);
        }
        
        if ($validator->fails()) {
            return response()->json(['message' => 'The provided credentials are incorrect.'($validator)], 403);
        }
        
        $user = User::where(['email' => $user_id])->orWhere('contact', $user_id)->first();
        if (isset($user)) {
            $data = [
                'email' => $user->email,
                'password' => $request->password
            ];
            
            if (auth()->attempt($data)) {
                $token = $user->createToken('AuthToken')->plainTextToken;
                return response()->json(["message" => "User logged in successfully.", 'user' => $user, 'token' => $token], 200);
            }
        }

        $errors = [];
        array_push($errors, ['code' => 'auth-001', 'message' => 'Invalid credential.']);
        return response()->json([
            'errors' => $errors
        ], 401);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'contact'=> 'required|numeric|digits:10',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|string|min:8|same:password'

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
        // $user = User::find($user->id)->latest();
        return response()->json(["message" => "User registered successfully.", 'token' => $token, "data" => $user], 201);
    }

    public function user_details(Request $request) {
        $user = $request->user();
        return response()->json(["message" => "User Details.", "data" => $user], 200);
        
    }

    public function logout(Request $request) {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    // facebook login
    public function redirectToFacebook()
    {
        return response()->json([
            'url' => Socialite::driver('facebook')->stateless()->redirect()->getTargetUrl()
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
                        'password' => bcrypt('123456dummy')
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
            'url' => Socialite::driver('google')->stateless()->redirect()->getTargetUrl()
        ]);
    }

    public function handleGoogleCallback(Request $request)
    {
        $user = Socialite::driver('google')->userFromToken($request->input('access_token'));

        // Check if the user exists in the database
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // User exists, log them in
            Auth::login($existingUser);
            return response()->json(["message" => "User logged in successfully.", 'user' => $user, 'token' => $token], 200);
        } else {
            // User does not exist, create a new user
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->save();

            // Log in the new user
            Auth::login($newUser);
            return response()->json(["message" => "User logged in successfully.", 'user' => $user, 'token' => $token], 200);
        }
    }

}
