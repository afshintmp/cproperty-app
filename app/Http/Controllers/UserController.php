<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

    public function add()
    {
        $permissions = Permission::all();
        $roles = Role::all();
        return view('admin.users.add', compact('permissions', 'roles'));
    }

    public function create(Request $request)
    {

        $this->createNewUser($request);


        return redirect()->route('admin.users.index')->with('success', 'User was create');

//        $user = User::create($admin)->giveRolesTo('admin');

    }

    private function userExisted(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        if ($user) return true;
        return false;
    }

    private function createNewUser($request)
    {
        if ($this->userExisted($request)) return back()->with('error', 'Email was existed');
        $user = [
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ];
//        dd(Carbon::now());
        $user = User::create($user)->giveRolesTo($request->role);
        return $user;
    }
}
