@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <h2>Tienda</h2>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Ropa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Estampillas</a>
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
    <h3>Productos</h3>
    <div class="row justify-content-center">
        @foreach ($items as $item)
            <bootstrap-product-card
                    product-picture-url="{{ $item->picture }}"
                    product-name="{{ $item->name }}"
                    product-description="{{ $item->description }}"
                    product-price="{{ $item->price }}" >
            </bootstrap-product-card>
        @endforeach
    </div>
</div>
@endsection
