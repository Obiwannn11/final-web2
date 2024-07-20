<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SoalController;

Route::get('/code', [AuthController::class, 'showCode'])->name('auth.code');
//login dan register ================================================================
Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login']);


Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register']);


//end login dan register

// crud QUiz /kategori================================================================
Route::resource('quiz', QuizController::class);
// end crud Quiz ================================================================


// crud QUiz /kategori================================================================
Route::resource('quiz.soal', SoalController::class)->shallow();
// end crud Quiz ================================================================

// Route::get('/admin', [AuthController::class, 'admin']);

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

//main section routes================================================================

Route::get('/', function () {
    return view('main.home');
})->name('main.home');


Route::get('/docs', function () {
    return view('main.docs');
})->name('main.docs');


Route::get('/about', function () {
    return view('main.about');
})->name('main.about');


Route::get('/help', function () {
    return view('main.help');
})->name('main.help');



//end main section


// Route::get('/quiz', [AuthController::class, 'index'])->name('quiz-page');

// bagian quiz  ================================================================

Route::get('/quiz-p', function () {
    return view('quiz-page', ['title' => 'quiz Page']);
});

// Route::get('/admin', function () {
//     return view('admin');
// });
