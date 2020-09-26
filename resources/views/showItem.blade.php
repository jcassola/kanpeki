@extends('layouts.app')

@section('content')
    <vue-spacer space="20"></vue-spacer>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid" src="{{$item->getUrlPicture()}}" alt="">
            </div>
            <div class="col-md-4">
                <h2>{{ $item->name }}</h4>
                <h3>${{ $item->price }}</h2>
            </div>
            <div class="col-md-12">
                <h4>Descripcion</h3>
                <p>{{ $item->description }}</p>
            </div>
        </div>
    </div>
    <vue-spacer space="20"></vue-spacer>
@endsection
