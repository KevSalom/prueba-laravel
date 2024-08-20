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
    // $post->title = 'PRUEBA 5';
    // $post->content = 'Esto es una prueba 4';
    // $post->isPro = true;
    // $post->save();
    // return $post;

    $posts = Post::find(1);
    echo $posts->isPro;
    echo '<br>';
    echo is_integer($posts->isPro);
    return is_bool($posts->isPro);

 
});
