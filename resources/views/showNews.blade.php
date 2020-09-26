@extends('layouts.app')

@section('content')
    <vue-spacer space="20"></vue-spacer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $news->title }}</h1>
                <img class="img-fluid" src="{{$news->getUrlPicture()}}" alt="">
                <p>{{ $news->text }}</p>
            </div>
        </div>
    </div>
    <vue-spacer space="20"></vue-spacer>
@endsection
