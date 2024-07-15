<?php

use Illuminate\Support\Facades\Route;
Route::get('/login', function() {
    return view('login', ['title' => 'Login']);
})->name('login');

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/quiz', function () {
    return view('quiz-page', ['title' => 'quiz Page']);
});
