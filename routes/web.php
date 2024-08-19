<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;
use App\Models\Post;

Route::get('/', homeController::class);

Route::get('/posts', [postController::class, 'index']);
Route::get('/posts/create', [postController::class, 'create']);
Route::get('/posts/{id}', [postController::class, 'show']);

Route::get('prueba', function () {
    // $post = new Post();
    // $post->title = 'Prueba 3';
    // $post->content = 'Esto es una prueba 3';
    // $post->save();
    // return $post;

    $postToDelete = Post::find(1);
    $postToDelete->delete();

    $restPosts = Post::all();

    return $restPosts;
});
