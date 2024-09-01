@extends('layouts.layout')

@section('content')
    <h2 class="text-center my-2">Création d'une nouvelle recette</h2>

    <form action="{{ route('recettes.createRecipe') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="categories_id" class="form-label">Catégorie</label>
            <input type="number" name="categories_id" class="form-control" id="categories_id" required>
        </div>
        <div class="mb-3">
            <label for="users_id" class="form-label">Utilisateur</label>
            {{-- <input type="number" name="users_id" class="form-control" id="users_id" value="{{ $userId }}" readonly> --}}
        </div>
        <div class="mb-3">
            <label for="types_id" class="form-label">Type</label>
            <input type="number" name="types_id" class="form-control" id="types_id" required>
        </div>
        <div class="mb-3">
            <label for="image_path" class="form-label">Chemin de l'image (optionnel)</label>
            <input type="text" name="image_path" class="form-control" id="image_path">
        </div>
        <div class="mb-3">
            <label for="preparation_time" class="form-label">Temps de préparation (en minutes)</label>
            <input type="number" name="preparation_time" class="form-control" id="preparation_time">
        </div>
        <div class="mb-3">
            <label for="cooking_time" class="form-label">Temps de cuisson (en minutes)</label>
            <input type="number" name="cooking_time" class="form-control" id="cooking_time">
        </div>
        <div class="mb-3">
            <label for="servings" class="form-label">Portions</label>
            <input type="number" name="servings" class="form-control" id="servings">
        </div>
        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingrédients</label>
            <select name="ingredients[]" id="ingredients" class="form-control" multiple required>
                @foreach($ingredients as $ingredient)
                    <option value="{{ $ingredient->id }}">{{ $ingredient->label }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
@endsection
