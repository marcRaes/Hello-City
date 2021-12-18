<?php

use Illuminate\Support\Facades\Route;

/*
 * Route home
 */
Route::get('/', function () {
    return view('home');
})->name('app_home');
/*
 * Ceci pourrait être écrit comme ceci :
 * Route::get('/', fn() => view('home'))->name('app_home');
 * ou comme ceci :
 * Route::view('/', 'home')->name('app_home');
 */

/*
 * Route About-us
 */
Route::get('/about-us', function () {
    return view('about');
})->name('app_about');
/*
 * Ceci pourrait être écrit comme ceci :
 * Route::get('/about-us', fn() => view('about'))->name('app_about');
 * ou comme ceci :
 * Route::view('/about-us', 'about')->name('app_about');
 */
