<?php

use Illuminate\Support\Arr;
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
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-atikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Anggi Maulana',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ullam quisquam optio laboriosam doloremque reprehenderit sunt alias possimus delectus corrupti.'
        ], [
            'id' => 2,
            'slug' => 'judul-atikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Sitii',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ullam quisquam optio laboriosam doloremque reprehenderit sunt alias possimus delectus corrupti.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-atikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Anggi Maulana',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ullam quisquam optio laboriosam doloremque reprehenderit sunt alias possimus delectus corrupti.'
        ], [
            'id' => 2,
            'slug' => 'judul-atikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Sitii',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ullam quisquam optio laboriosam doloremque reprehenderit sunt alias possimus delectus corrupti.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post ]);
});
