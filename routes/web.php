<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Anggi Maulana', 'title' => 'About Me']);
});

Route::get('/contact', function () {
    return view('contact', ['ig' => 'https://instagram.com/anggii.jsx', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all() ]);
});

Route::get('/posts/{slug}', function($slug) {

    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post ]);
});
