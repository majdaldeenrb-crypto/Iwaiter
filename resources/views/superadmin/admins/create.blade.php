@extends('layouts.app')

@section('title', 'Create New Admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4">Create New Admin</h1>

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

    {{-- Create Admin Form --}}
    <form action="{{ route('superadmin.admins.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="block font-medium">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required class="border px-2 py-1 w-full rounded">
        </div>

        <div class="mb-3">
            <label class="block font-medium">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required class="border px-2 py-1 w-full rounded">
        </div>

        <div class="mb-3">
            <label class="block font-medium">Password</label>
            <input type="password" name="password" required class="border px-2 py-1 w-full rounded">
        </div>

        <div class="mb-3">
            <label class="block font-medium">Confirm Password</label>
            <input type="password" name="password_confirmation" required class="border px-2 py-1 w-full rounded">
        </div>

        {{-- Role dropdown (exclude 'admin') --}}
        <div class="mb-3">
            <label class="block font-medium">Role</label>
            <select name="role" class="border px-2 py-1 w-full rounded" required>
                <option value="">-- Select Role --</option>
                @foreach($roles->reject(fn($role) => $role === 'admin') as $role)
                    <option value="{{ $role }}" {{ old('role') === $role ? 'selected' : '' }}>
                        {{ ucfirst($role) }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mt-2">
            Create Admin
        </button>
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
