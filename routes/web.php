<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Mats'], ['title' => 'About Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'blog Page']);
});

Route::get('/kontak', function () {
    return view('kontak', ['title' => 'kontak Page']);
});

Route::get('/login', function() {
    return view('login', ['title' => 'Login']);
})->name('login');
