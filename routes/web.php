<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;

Route::get('/', homeController::class);

Route::get('/posts', [postController::class, 'index']);
Route::get('/posts/create', [postController::class, 'create']);
Route::get('/posts/{id}', [postController::class, 'show']);
