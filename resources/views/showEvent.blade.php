@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h4>{{ $event->title }}</h4>
            <p>{{ $event->when }}</p>
        </div>
        <div class="col-md-8"></div>
            <img src="{{$event->getUrlPicture()}}" alt="">
        </div>
{{--        <h5>Descripción</h5>--}}
        <div class="col-md-12">
            <p>{{ $event->description }}</p>
        </div>
    </div>
@endsection
