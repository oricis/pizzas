<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
|
*/

Route::view('', 'pages/home')
    ->name('home');

Route::view('home', 'pages/home')
    ->name('home');
