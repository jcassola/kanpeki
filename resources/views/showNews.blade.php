@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4>{{ $news->title }}</h4>
            <img src="{{$news->getUrlPicture()}}" alt="">
            <p>{{ $news->text }}</p>
        </div>
    </div>
@endsection
