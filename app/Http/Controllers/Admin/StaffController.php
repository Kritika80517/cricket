<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Role;
use App\Models\User;
use App\Models\Department;
use Hash;

class StaffController extends Controller
{
    public function index()
    { 
        $staffs = Staff::latest()->get();
        return view('admin.staff.staffs.index', compact('staffs'));
    }

    public function create()
    {
        $roles = Role::where('name','!=', 'Super Admin')->orderBy('id', 'desc')->get();
        return view('admin.staff.staffs.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'contact' => 'required',
            'password' => 'required|min:8',
            'status' => 'required'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->status = $request->status;
        $user->role = "staff";
        $user->password = Hash::make($request->password);
        if($user->save()){
            $staff = new Staff;
            $staff->user_id = $user->id;
            $staff->role_id = $request->role_id;
            $user->assignRole(Role::findOrFail($request->role_id)->name);
            if($staff->save()){
                return redirect()->route('admin.staffs.index')->with('success', 'Staff has been inserted successfully');
            }
        }

        return back()->with('error', 'Something went wrong');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $staff = Staff::findOrFail(decrypt($id));
        $roles = $roles = Role::where('name','!=', 'Super Admin')->orderBy('id', 'desc')->get();
        return view('admin.staff.staffs.edit', compact('staff', 'roles'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'. $id,
            'contact' => 'required',
            'password' => 'required|min:8',
            'role' => 'required',
            'status' => 'required'
        ]);

        $staff = Staff::findOrFail($id);
        $user = $staff->user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->status = $request->status;

        if(strlen($request->password) > 0){
            $user->password = Hash::make($request->password);
        }
        if($user->save()){
            $staff->role_id = $request->role_id;
            if($staff->save()){
                $user->syncRoles(Role::findOrFail($request->role_id)->name);
                return redirect()->route('admin.staffs.index')->with('success' , 'Staff has been updated successfully');
            }
        }

        return back()->with('error', 'Something went wrong');
    }

    public function destroy($id)
    {
        User::destroy(Staff::findOrFail($id)->user->id);
        if(Staff::destroy($id)){
            return redirect()->route('admin.staffs.index')->with('success', 'Staff has been deleted successfully');
        }

        return back()->with('error', 'Something went wrong');
    }


}
