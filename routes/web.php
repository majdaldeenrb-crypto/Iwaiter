<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminManagementController;
use App\Http\Controllers\RoleController;

Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/features', function () {
    return view('pages.features');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/testimonials', function () {
    return view('pages.testimonials');
});
// Home / Welcome page
Route::get('/', function () {
    return view('welcome');
});

// Dashboard - accessible only to authenticated and verified users
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Make sure dashboard.blade.php uses <x-app-layout>
    })->name('dashboard');
});

// ------------------------
// Superadmin routes - only for users with 'super-admin' role
// Uses Spatie 'role' middleware alias
// ------------------------
Route::middleware(['auth', 'role:super-admin'])->group(function () {
    // Admin Management
    Route::get('/superadmin/admins', [AdminManagementController::class, 'index'])
        ->name('superadmin.admins.index');
    Route::get('/superadmin/admins/create', [AdminManagementController::class, 'create'])
        ->name('superadmin.admins.create');
    Route::post('/superadmin/admins', [AdminManagementController::class, 'store'])
        ->name('superadmin.admins.store');
    Route::get('/superadmin/admins/{admin}/edit', [AdminManagementController::class, 'edit'])
        ->name('superadmin.admins.edit');
    Route::put('/superadmin/admins/{admin}', [AdminManagementController::class, 'update'])
        ->name('superadmin.admins.update');
    Route::delete('/superadmin/admins/{admin}', [AdminManagementController::class, 'destroy'])
        ->name('superadmin.admins.destroy');
});


Route::post('/superadmin/roles', [RoleController::class, 'store'])
    ->name('superadmin.roles.store')
    ->middleware('role:super-admin');
// ------------------------
// Profile routes - accessible to any authenticated user
// ------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ------------------------
// Auth routes (Breeze / Jetstream)
// ------------------------
require __DIR__.'/auth.php';
