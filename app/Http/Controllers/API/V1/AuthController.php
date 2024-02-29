<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Hash;
use Validator;
use Str;
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
}
