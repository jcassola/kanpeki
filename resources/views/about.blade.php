@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
<vue-section title="Acerca de nosotros">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, ea nisi! Deleniti, eaque necessitatibus! Voluptatum aspernatur ad laborum beatae accusamus sed eligendi inventore cupiditate facilis, sequi, odit exercitationem, neque impedit!</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, ea nisi! Deleniti, eaque necessitatibus! Voluptatum aspernatur ad laborum beatae accusamus sed eligendi inventore cupiditate facilis, sequi, odit exercitationem, neque impedit!</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, ea nisi! Deleniti, eaque necessitatibus! Voluptatum aspernatur ad laborum beatae accusamus sed eligendi inventore cupiditate facilis, sequi, odit exercitationem, neque impedit!</p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('/images/kampeki-kun.jpg') }}" class="img-fluid" alt="Responsive image">
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
