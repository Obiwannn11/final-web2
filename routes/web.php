<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/quiz-page', function () {
    return view('quiz-page');
})->name('quiz-page');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/docs', function () {
    return view('docs');
})->name('docs');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

