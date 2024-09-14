<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
    return view('posts', data: ['title' => 'Blog', 'posts' => Post::all() ]);
});

Route::get('/posts/{post:slug}', function(Post $post) {

    // $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post ]);
});

Route::get('/authors/{user:username}', function(User $user) {

    // $post = Post::find($slug);

    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {

    // $post = Post::find($slug);

    return view('posts', ['title' => 'Article in Category: ' . $category->name, 'posts' => $category->posts ]);
});
