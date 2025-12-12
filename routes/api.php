<?php

use App\Http\Controllers\Api\PostApiController;
use Illuminate\Support\Facades\Route;

Route::get('posts/export', [PostApiController::class, 'export']);
Route::apiResource('posts', PostApiController::class);
