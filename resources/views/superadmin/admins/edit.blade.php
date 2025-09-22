@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4">Edit User</h1>

    {{-- Display Validation Errors --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-800 px-4 py-2 rounded mb-4">
            <ul class="mb-0 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Edit User Form --}}
    <form action="{{ route('superadmin.admins.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="block font-medium">Name</label>
            <input type="text" name="name" value="{{ old('name', $admin->name) }}" required class="border px-2 py-1 w-full rounded">
        </div>

        <div class="mb-3">
            <label class="block font-medium">Email</label>
            <input type="email" name="email" value="{{ old('email', $admin->email) }}" required class="border px-2 py-1 w-full rounded">
        </div>

        <div class="mb-3">
            <label class="block font-medium">Password <small>(leave blank to keep current)</small></label>
            <input type="password" name="password" class="border px-2 py-1 w-full rounded">
        </div>

        <div class="mb-3">
            <label class="block font-medium">Confirm Password</label>
            <input type="password" name="password_confirmation" class="border px-2 py-1 w-full rounded">
        </div>

        {{-- Role dropdown (exclude super-admin) --}}
        <div class="mb-3">
            <label class="block font-medium">Role</label>
            <select name="role" class="border px-2 py-1 w-full rounded" required>
    <option value="">-- Select Role --</option>
    @foreach(\Spatie\Permission\Models\Role::whereNotIn('name', ['super-admin', 'admin'])->get() as $role)
        <option value="{{ $role->name }}" {{ old('role', $admin->getRoleNames()->first()) === $role->name ? 'selected' : '' }}>
            {{ ucfirst($role->name) }}
        </option>
    @endforeach
</select>

        </div>

        <div class="flex space-x-2 mt-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update User</button>
            <a href="{{ route('superadmin.admins.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Cancel</a>
        </div>
    </form>

    {{-- Add New Role (Super Admin only, separate form) --}}
    @if(auth()->user()->hasRole('super-admin'))
    <div class="mt-6 p-4 border rounded bg-gray-50">
        <h2 class="font-semibold mb-2">Add New Role</h2>
        <form action="{{ route('superadmin.roles.store') }}" method="POST" class="flex gap-2 items-center">
            @csrf
            <input type="text" name="role_name" placeholder="New role name" class="border px-2 py-1 rounded flex-1" required>
            <button type="submit" class="bg-green-600 text-white px-4 py-1 rounded hover:bg-green-700">Add Role</button>
        </form>
        @error('role_name')
            <p class="text-red-600 mt-2">{{ $message }}</p>
        @enderror
    </div>
    @endif
</div>
@endsection
