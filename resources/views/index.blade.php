@extends('layouts.layout')

@section('title', 'Casserole en folie')

@section('content')
    {{-- <h1>Recettes</h1>
    <p>Bienvenue dans la section des recettes.</p>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($recipes as $recipe)
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{ asset('assets/recettes/' . $recipe->image_path) }}" alt="{{ $recipe->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $recipe->title }}</h5>
                    <p class="card-text">{{ $recipe->description }}</p>
                    <a href="{{ route('recipes.show', ['recipe' => $recipe->id]) }}" class="btn btn-primary">Voir la recette</a>
                </div>
            </div>
        </div>
        @endforeach
    </div> --}}
@endsection