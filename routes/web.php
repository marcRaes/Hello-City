<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('app_home');

Route::get('/about-us', function () {
    return view('about');
})->name('app_about');
