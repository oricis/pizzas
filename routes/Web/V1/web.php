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
    ->name('home.home');

Route::namespace('Web\V1\Pizzas')
    ->group(function () {

    Route::resource('pizzas', 'PizzasController');
    Route::resource('ingredients', 'Ingredients\IngredientsController');
});


