<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/viajes', function () {
    return view('viajes');
})->name('viajes');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('nosotros', function () {
    return view('nosotros');
})->name('nosotros');

use App\Http\Controllers\LoginController;

Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::post('/register', [LoginController::class, 'register'])->name('register.store');