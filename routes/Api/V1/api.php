<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
|
|
*/
Route::namespace('Api\V1\Pizzas')
    ->group(function () {

    Route::get('pizzas/{imageId}/image-src/{tableName}', 'PizzaController@index')
        ->name('api.pizzas.index')
        ->where('imageId', '[0-9]+');

    Route::get('pizzas/{id}', 'PizzaController@find')
        ->name('api.pizzas.find')
        ->where('id', '[0-9]+');
});
