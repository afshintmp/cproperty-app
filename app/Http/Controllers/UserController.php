<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('admin.users.list', compact('users'));
    }

    public function edit(User $user)
    {
        $permissions = Permission::all();
        $roles = Role::all();
        $user->load('permissions', 'roles');
        return view('admin.users.edit', compact('permissions', 'roles', 'user'));
    }

    public function update(Request $request, User $user)
    {
        $user->refreshRole($request->role);
        $user->refreshPermission($request->permission);
        return back()->with('success', true);
    }
}
