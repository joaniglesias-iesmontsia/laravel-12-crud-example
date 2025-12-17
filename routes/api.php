<?php

use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\PostApiController;
use Illuminate\Support\Facades\Route;

// Authentication routes
Route::post('login', [AuthApiController::class, 'login'])->name('api.login');

// Protected routes - require authentication
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthApiController::class, 'logout'])->name('api.logout');
    
    Route::get('posts/export', [PostApiController::class, 'export'])->name('api.posts.export');
    Route::apiResource('posts', PostApiController::class)->names([
        'index' => 'api.posts.index',
        'store' => 'api.posts.store',
        'show' => 'api.posts.show',
        'update' => 'api.posts.update',
        'destroy' => 'api.posts.destroy',
    ]);
});
