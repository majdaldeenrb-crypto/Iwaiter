<?php

namespace App\Http\Controllers; // <-- your namespace

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role; // <-- import Role model

class RoleController extends Controller  // <-- here
{
    public function __construct()
    {
        $this->middleware('role:super-admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|string|unique:roles,name',
        ]);

        Role::create(['name' => $request->role_name]);

        return redirect()->back()->with('success', 'Role created successfully!');
    }

    // Optional index method
    public function index()
    {
        $roles = Role::all();
        return view('superadmin.roles.index', compact('roles'));
    }
}
