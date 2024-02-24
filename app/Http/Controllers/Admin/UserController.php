<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Hash;

class UserController extends Controller
{
    public function profile()
    {
        $admin = User::where('id', Auth::user()->id)->first();
        return view('admin.profile', compact('admin'));
    }
    public function updateProfile(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if (!$validate) {
            return redirect()->route('admin.profile')->with('failed', 'Something went wrong');
        }

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->update();
        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
    }
    function updatePassword(Request $request)
    {
        $admin = User::where('id', Auth::user()->id)->first();
        
        if (!($admin && Hash::check($request->current_password, $admin->password))) {
            return redirect()->route('admin.profile')->with("failed", "Your current password does not matches with the password you provided. Please try again.");
        }
        
        if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            return redirect()->route('admin.profile')->with("failed", "New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8',
            'password_confirmation' => 'required|string|min:8|same:new_password'
        ]);
        
        //Change Password
        $admin->password = Hash::make($request->new_password);
        $admin->update();

        return redirect()->route('admin.profile')->with("success", "Password changed successfully !");
    }

    // show user 
    
}
