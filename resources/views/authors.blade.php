@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Autores</h2>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Manga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Musica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Otros</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
    </nav>
    <h3>Autores</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <img class="card-img-top" src="..." alt="Un producto">
                <div class="card-body">
                    <h5 class="card-title">Nombre del producto</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detalles del autor</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <img class="card-img-top" src="..." alt="Un producto">
                <div class="card-body">
                    <h5 class="card-title">Nombre del producto</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detalles del autor</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <img class="card-img-top" src="..." alt="Un producto">
                <div class="card-body">
                    <h5 class="card-title">Nombre del producto</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detalles del autor</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
