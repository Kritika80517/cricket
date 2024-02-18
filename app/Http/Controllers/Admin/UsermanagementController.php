<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsermanagementController extends Controller
{
    public function index(){
        $users = User::where('is_admin', 0)->get();
        return view('admin.users.index', compact('users'));
    }
    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            // 'email' => 'required|email|unique:users',
            'status' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->contact = $request->contact;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->status = $request->status;
        $user->save();
        return redirect()->route('admin.users.list')->with('success', 'User add successfully');
    }

    public function edit($id){
        $data = User::where('id', $id)->first();
        return view('admin.users.edit', compact('data'));
    }

    public function update(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::where('id', $request->user_id)->first();
        $user->name = $request->name;
        $user->contact = $request->contact;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->status = $request->status;
        $user->save();
        return redirect()->route('admin.users.list')->with('success', 'User updated successfully');
    }

    public function destory($id){
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users')->with('success', 'User deleted successfully');
    }    

}
