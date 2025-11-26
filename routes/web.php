<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Redirect the root URL to the posts index page
Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::resource('posts', PostController::class);