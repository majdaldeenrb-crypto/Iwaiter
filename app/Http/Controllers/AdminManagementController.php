<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminManagementController extends Controller
{
    // Show all users and roles (for Super Admin)
    public function index()
    {
        $users = User::all();
        $roles = Role::whereNotIn('name', ['super-admin'])->pluck('name', 'name'); // Exclude super-admin
        return view('superadmin.admins.index', compact('users', 'roles'));
    }

    // Show create user form
    public function create()
    {
        $this->authorizeSuperAdmin();

        // Only roles except super-admin
        $roles = Role::whereNotIn('name', ['super-admin'])->pluck('name', 'name');
        return view('superadmin.admins.create', compact('roles'));
    }

    // Store new user
    public function store(Request $request)
    {
        $this->authorizeSuperAdmin();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|string|exists:roles,name',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole($request->role);

        return redirect()->route('superadmin.admins.index')
            ->with('success', 'User created successfully!');
    }

    // Show edit user form
    public function edit(User $admin)
    {
        $this->authorizeSuperAdmin();

        $roles = Role::whereNotIn('name', ['super-admin'])->pluck('name', 'name');
        return view('superadmin.admins.edit', compact('admin', 'roles'));
    }

    // Update user
    public function update(Request $request, User $admin)
{
    $this->authorizeSuperAdmin();

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $admin->id,
        'password' => 'nullable|string|min:6|confirmed',
        'role' => 'required|string|exists:roles,name', // Role must exist
    ]);

    // Update basic info
    $admin->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->filled('password') ? Hash::make($request->password) : $admin->password,
    ]);

    // Sync role (replace old role with new)
    $admin->syncRoles([$request->role]);

    return redirect()->route('superadmin.admins.index')
        ->with('success', 'Admin updated successfully!');
}


    // Delete user
    public function destroy(User $admin)
    {
        if ($admin->hasRole('super-admin')) {
            return redirect()->route('superadmin.admins.index')
                ->with('error', 'Cannot delete Super Admin!');
        }

        $admin->delete();
        return redirect()->route('superadmin.admins.index')
            ->with('success', 'Admin deleted successfully!');
    }

    // Add new role dynamically
    public function addRole(Request $request)
    {
        $this->authorizeSuperAdmin();

        $request->validate([
            'role_name' => 'required|string|max:50|unique:roles,name',
        ]);

        Role::create(['name' => $request->role_name]);

        return redirect()->route('superadmin.admins.index')
            ->with('success', 'Role created successfully!');
    }

    // ✅ Helper method to authorize Super Admin
    private function authorizeSuperAdmin()
    {
        if (!auth()->user()->hasRole('super-admin')) {
            abort(403, 'Unauthorized');
        }
    }
}
