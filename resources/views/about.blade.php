@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
<vue-section title="Acerca de nosotros">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <p>Somos un proyecto Santiaguero que abarca la cultura pop asiatica y occidental (se incluyen la cultura pop y tradicional japonesa, coreana, china,etc; además de los videojuegos, comics, literatura en general, la cinefilia y la música de corte mundial)</p>
            <h4>
                Contactos
            </h4>
            <ul>
                <li class="padding-bottom-20 padding-left-5">
                    <span class="mdi mdi-phone"></span>
                    05 3087308
                </li>
                <li class="padding-bottom-20 padding-left-5">
                    <span class="mdi mdi-email"></span>
                    roswellh@nauta.cu
                </li>
            </ul>
            <social-links></social-links>
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
