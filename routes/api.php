<?php

use App\Http\Controllers\Api\PostApiController;
use Illuminate\Support\Facades\Route;

Route::get('posts/export', [PostApiController::class, 'export'])->name('api.posts.export');
Route::apiResource('posts', PostApiController::class)->names([
    'index' => 'api.posts.index',
    'store' => 'api.posts.store',
    'show' => 'api.posts.show',
    'update' => 'api.posts.update',
    'destroy' => 'api.posts.destroy',
]);
