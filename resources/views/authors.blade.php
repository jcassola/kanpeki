@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
@auth
    <vue-add-new href="{{ route('new_author') }}"></vue-add-new>
@endauth
<vue-section title="Autores">
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

    <vue-spacer space="20"></vue-spacer>

    <div class="row">
        @foreach ($authors as $author)
        <div class="col-md-6">
            <div class="card">
                <a href="{{ route('author.show', [$author->id]) }}">
                    <img class="card-img-top" src="{{ $author->getUrlPicture() }}" alt="Un autor">
                </a>

                <div class="card-body">
                    <p>Nombre:   <span class="app-text-tetrary-color">{{ $author->name }}</span></p>
                    <p>Nick:    <span class="app-text-tetrary-color">{{ $author->nick }}</span></p>
                    <p>Categoría:    <span class="app-text-tetrary-color">{{ $author->category }}</span></p>
                    <p class="card-text">{{ $author->description }}</p>
                </div>
            </div>
            <vue-spacer space="10"></vue-spacer>
        </div>
        @endforeach
    </div>
</vue-section>
@endsection
