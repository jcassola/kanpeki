@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
<vue-section title="Eventos">
    <div class="row justify-content-center">
        @foreach ($events as $event)
        <div class="col-md-12">
            <div class="card">
                <img class="card-img-top" src="{{ $event->picture }}" alt="Un producto">
                <div class="card-body">
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-text">{{ $event->description }}</p>
                    <a href="#" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</vue-section>
@endsection
