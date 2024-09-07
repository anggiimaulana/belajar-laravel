<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Anggi Maulana']);
});

Route::get('/contact', function () {
    return view('contact', ['ig' => 'https://instagram.com/anggii.jsx']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});
