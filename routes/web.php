<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', 'App\Http\Controllers\RecipeController@index')->name('recipes.index');

Route::get('/recipes/create', 'RecipeController@create')->name('recipes.create');