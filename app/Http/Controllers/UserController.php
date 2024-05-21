<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use DB;
use Hash;
use Illuminate\Http\Request;
use Mail;

class UserController extends Controller
{

    public function index()
    {
        // $users = User::where('is_admin', 0)->get();
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->with('success', 'User logged in successfully.');
        }

        return redirect()->route('login')->withErrors([
            'auth' => 'The provided credentials are incorrect.',
        ])->withInput();
    }

    public function register(Request $request)
    {
        dd($request->all());
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
        return redirect()->route('home')->with('message', 'User registered successfully.');
    }

    public function forgotPasswordForm()
    {
        return view('frontend.auth.forgotPassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send('email.forgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function resetPasswordForm($token)
    {
        return view('frontend.auth.resetPasswordLink', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|string|min:8|same:password',
        ]);

        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                'email' => $request->email,
                'token' => $request->token,
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

        return redirect('/login')->with('message', 'Your password has been changed!');
    }
}
