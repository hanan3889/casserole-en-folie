<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    //Afficher la liste des ingrédients
    public function index()
    {
        $ingredients = Ingredient::all();
        return view('ingredients.index', compact('ingredients'));
    }

    //Afficher le formulaire de création d'un ingrédient
    public function create()
    {
        return view('ingredients.create');
    }

    //Enregistrer un ingrédient
    public function store(Request $request)
    {
        //Validation des données
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'quantity' => 'required|integer',
            'unit' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //Création de l'ingrédient
        Ingredient::create($validator->validated());
        return redirect()->route('ingredients.index')->with('success', 'Ingrédient créé avec succès !');
    }

    //Afficher un ingrédient
    public function edit($id)
    {
        $ingredient = Ingredient::find($id);
        return view('ingredients.edit', compact('ingredient'));
    }

    //Mettre à jour un ingrédient
    public function update(Request $request, $id)
    {
        //Validation des données
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'quantity' => 'required|integer',
            'unit' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //Mise à jour de l'ingrédient
        $ingredient = Ingredient::find($id);
        $ingredient->update($validator->validated());
        return redirect()->route('recettes.index')->with('success', 'Ingrédient mis à jour avec succès !');
    }

    //Supprimer un ingrédient
    public function destroy($id)
    {
        $ingredient = Ingredient::find($id);

        if (!$ingredient) {
            abort(404);
        }

        $ingredient->delete();
        return redirect()->route('ingredients.index')->with('success', 'Ingrédient supprimé avec succès !');
    }
}
