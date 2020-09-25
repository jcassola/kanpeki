@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4>{{ $news->name }}</h4>
            <img src="{{$news->picture}}" alt="">
            <p>{{ $news->text }}</p>
        </div>
    </div>
@endsection
