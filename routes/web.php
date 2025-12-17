<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

// Redirect the root URL to the posts index page
Route::get('/', function () {
    return redirect()->route('posts.index');
});

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
});

Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Protected routes - require authentication
Route::middleware('auth')->group(function () {
    // Export route must be before resource route to avoid conflicts
    Route::get('posts/export', [PostController::class, 'export'])->name('posts.export');
    Route::resource('posts', PostController::class);
});