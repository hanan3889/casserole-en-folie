<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\IngredientController;

Route::get('/', function () {
    return view('index');
})->name('index');



Route::get('/recettes', [RecipeController::class, 'showRecipes']);
Route::get('/recettes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');
Route::get('/creation-recette', [RecipeController::class, 'createRecipe'])->name('recettes.createRecipe');
// Route::post('/creation-recette', [RecipeController::class, 'create'])->name('createRecipe');


