@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top" src="..." alt="Un producto">
                <div class="card-body">
                    <h5 class="card-title">Nombre del producto</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Ver en la tienda</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top" src="..." alt="Un producto">
                <div class="card-body">
                    <h5 class="card-title">Nombre del producto</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Ver en la tienda</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
