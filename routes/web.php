<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Redirect the root URL to the posts index page
Route::get('/', function () {
    return redirect()->route('posts.index');
});

// Export route must be before resource route to avoid conflicts
Route::get('posts/export', [PostController::class, 'export'])->name('posts.export');

Route::resource('posts', PostController::class);