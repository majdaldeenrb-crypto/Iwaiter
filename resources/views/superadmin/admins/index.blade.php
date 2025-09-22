@extends('layouts.app')

@section('title', 'Users List')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-4">Users List</h1>

    {{-- Success message --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error message --}}
    @if(session('error'))
        <div class="bg-red-100 text-red-800 px-4 py-2 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    @if(auth()->user()->hasRole('super-admin'))
        {{-- Create new user --}}
        <div class="mb-6">
            <a href="{{ route('superadmin.admins.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Create New User
            </a>
        </div>

        {{-- Add new role form --}}
        <div class="mb-6 p-4 border rounded bg-gray-50">
            <h2 class="font-semibold mb-2">Add New Role</h2>
            <form action="{{ route('superadmin.roles.store') }}" method="POST" class="flex gap-2 items-center">
                @csrf
                <input type="text" name="role_name" placeholder="Role name (e.g., editor1)" 
                       class="border px-2 py-1 rounded flex-1" required>
                <button type="submit" class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">
                    Add Role
                </button>
            </form>
            @error('role_name')
                <p class="text-red-600 mt-2">{{ $message }}</p>
            @enderror
        </div>
    @endif

    {{-- Users Table --}}
    @if($users->count() > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-100 border-b">
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Name</th>
                        <th class="px-4 py-2 text-left">Email</th>
                        <th class="px-4 py-2 text-left">Role(s)</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $user->id }}</td>
                            <td class="px-4 py-2">{{ $user->name }}</td>
                            <td class="px-4 py-2">{{ $user->email }}</td>
                            <td class="px-4 py-2">
                                {{ implode(', ', $user->getRoleNames()->reject(fn($role) => $role === 'admin')->toArray()) }}
                            </td>
                            <td class="px-4 py-2 space-x-2">
                                {{-- Edit user --}}
                                <a href="{{ route('superadmin.admins.edit', $user->id) }}" 
                                   class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">
                                   Edit
                                </a>

                                {{-- Delete user (not super-admin) --}}
                                @if(!$user->hasRole('super-admin'))
                                    <form action="{{ route('superadmin.admins.destroy', $user->id) }}" method="POST" style="display:inline;" 
                                          onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700">
                                            Delete
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-gray-600 mt-4">No users found.</p>
    @endif
</div>
@endsection
