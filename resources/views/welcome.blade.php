@extends('layouts.layout')

@section('title', 'Casserole en folie')

@section('content')
    <h1 class="my-3">Bienvenue</h1>
    <p>Ici, retrouvez toutes les recettes publiées par nos utilisateurs.</p>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/recettes/salade-nicoise.jpg')}}" alt="salade-nicoise">
                <div class="card-body">
                    <h5 class="card-title">Salade nicoise</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/recettes/chili-con-carne.jpg')}}" alt="chili-con-carne">
                <div class="card-body">
                    <h5 class="card-title">Chili con carne</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/recettes/sorbet.jpg')}}" alt="sorbet-pamplemousse">
                <div class="card-body">
                    <h5 class="card-title">Sorbet pamplemousse</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/recettes/toast-avocat.jpg')}}" alt="toast-avocat">
                <div class="card-body">
                    <h5 class="card-title">Toast d'avocat</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/recettes/veloute.jpg')}}" alt="veloute-champignons">
                <div class="card-body">
                    <h5 class="card-title">Velouté de champignons</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/recettes/hamburger.jpg')}}" alt="hamburger">
                <div class="card-body">
                    <h5 class="card-title">Hamburger et frites maison</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection
