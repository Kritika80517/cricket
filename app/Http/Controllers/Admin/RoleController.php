<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::where('name','!=', 'Super Admin')->paginate(10);
        return view('admin.staff.staff_roles.index', compact('roles'));

    }

    public function create()
    {
        return view('admin.staff.staff_roles.create');
    }

    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->name]);
        $permissionIds = $request->permissions;
        $permissions = Permission::whereIn('id', $permissionIds)->get();

        $role->givePermissionTo($permissions);

        return redirect()->route('admin.roles.index')->with('success', 'Role has been added successfully');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit(Request $request, $id)
    {
        $lang = $request->lang;
        $role = Role::findOrFail($id);
        return view('admin.staff.staff_roles.edit', compact('role','lang'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $permissionIds = $request->permissions;
        $permissions = Permission::whereIn('id', $permissionIds)->get();

        $role->syncPermissions($permissions);
        $role->save();

        return back()->with('success', 'Role has been updated successfully');
        // return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        Role::destroy($id);
        return redirect()->route('admin.roles.index')->with('success', 'Role has been deleted successfully');
    }

    public function add_permission(Request $request)
    {
        $permission = Permission::create(['name' => $request->name, 'section'=> $request->parent]);
        return redirect()->route('admin.roles.index');
    }

    public function create_admin_permissions(){
        
    }
}
