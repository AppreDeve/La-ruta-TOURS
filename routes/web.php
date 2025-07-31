<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/viajes', function () {
    return view('viajes');
})->name('viajes');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria');
