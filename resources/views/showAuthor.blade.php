@extends('layouts.app')

@section('content')
    <vue-spacer space="20"></vue-spacer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <vue-round-image src="{{ $author->getUrlPicture() }}"></vue-round-image>
                <p>{{ $author->name }}</p>
            </div>
            <div class="col-md-9">
            <h1>{{ $author->nick }}</h1>
            <p>Categoria: <span class="app-text-tetrary-color"> {{ $author->category }} </span></p>
            <h4 class="app-text-tetrary-color">Acerca de {{ $author->nick }}</h4>
            <p>{{ $author->description }}</p>
            </div>
        </div>
    </div>
    <vue-spacer space="20"></vue-spacer>
@endsection
