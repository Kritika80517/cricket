<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
Use Auth;
use Hash;

class LoginController extends Controller
{
    public function loginShow()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username'  => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        $user = User::where('email', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect('admin/dashboard')->with('success', 'Logged in successfully.');;
        } else {
            return back()->with('failed', 'Invalid Credentials.');
        }
    }

    public function forgotPassword()
    {
        return view('admin.auth.forgot-password');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.auth.login.show')->with('success', 'Log out.');
    }
}
