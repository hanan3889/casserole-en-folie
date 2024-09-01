<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Controllers\IngredientController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RecipeController extends Controller
{
    //
    public function index()
    {
        // $recipes = Recipe::all();
        $recipes = Recipe::orderBy('id', 'desc')->get();
        $ingredients = Ingredient::all(); // Récupérer tous les ingrédients
        // \Log::info('Contenu de $recipes : ' . json_encode($recipes));
        return view('index', compact('recipes', 'ingredients'));
    }

    public function create(Request $request)  
    {

        //Validation des données
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:50',
            'description' => 'required|string',
            'image_path' => 'nullable|string|max:255',
            'preparation_time' => 'nullable|integer',
            'cooking_time' => 'nullable|integer',
            'servings' => 'nullable|integer',
            'categories_id' => 'required|integer|exists:categories,id',
            'users_id' => 'required|integer|exists:users,id',
            'types_id' => 'required|integer|exists:types,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //Création de la recette
        Recipe::create($validator->validated());
            return redirect()->route('index')->with('success', 'Recette créée avec succès !');
    }
    

    public function createRecipe()
    {
        // return view('recettes.create');
        $ingredients = Ingredient::all();
        // dd($ingredients); // Afficher les ingrédients
    //     $ingredients = [
    //     (object) ['id' => 1, 'label' => 'Ingredient 1'],
    //     (object) ['id' => 2, 'label' => 'Ingredient 2']
    // ];
        return view('recettes.create', compact('ingredients'));
    }

    public function showRecipes()
    {
        $recipes = Recipe::all();
        return view('index', ['recipes' => $recipes]);
    }

    public function show($id)
    {
        $recipe = Recipe::find($id);

        if (!$recipe) {
            abort(404);
        }
        
        return view('index', ['recipe' => $recipe]);}
    
}
