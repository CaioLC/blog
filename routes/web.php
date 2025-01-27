<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::card();
    // dd($posts);
    return view('home', ['posts' => $posts]);
});

Route::get('/posts/{id}', function ($id) {
    $post = Post::find($id);
    return view('post', ['post' => $post]);
});

Route::get('/contact', function () {
    return view('contact');
});