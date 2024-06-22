<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', 'App\Http\Controllers\RecipeController@index')->name('recipes.index');

Route::get('/recipes/create', 'RecipeController@create')->name('recipes.create');

Route::get('/recettes', function () {
    return view('recettes.recette');
});

// Route::get('/login', function () {
//     return view('login');
// });