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