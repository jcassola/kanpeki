@extends('layouts.app')

@section('content')
    <vue-spacer space="20"></vue-spacer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>{{ $event->title }}</h1>
                <p>{{ $event->when }}</p>
                <p>{{ $event->description }}</p>
            </div>
            <div class="col-md-8">
                <img class="img-fluid" src="{{$event->getUrlPicture()}}" alt="">
            </div>
        </div>
    </div>
    <vue-spacer space="20"></vue-spacer>
@endsection
