@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h4>{{ $event->name }}</h4>
            <p>{{ $event->when }}</p>
        </div>
        <div class="col-md-8"></div>
            <img src="{{$event->picture}}" alt="">
        </div>
        <h5>Descripcion</h5>
        <div class="col-md-12">
            <p>{{ $event->text }}</p>
        </div>
    </div>
@endsection
