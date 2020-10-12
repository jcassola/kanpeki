@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
<vue-section title="Acerca de nosotros">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <p>Somos un proyecto Santiaguero que abarca la cultura pop asiatica y occidental (se incluyen la cultura pop y tradicional japonesa, coreana, china,etc; además de los videojuegos, comics, literatura en general, la cinefilia y la música de corte mundial)</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('/images/kampeki-kun.jpg') }}" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('/images/kampeki-kun.jpg') }}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</vue-section>
@endsection
