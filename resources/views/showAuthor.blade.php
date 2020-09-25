@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <vue-round-image src="{{ $author->getUrlPicture() }}"></vue-round-image>
            <h4>{{ $author->nick }}</h4>
            <p>{{ $author->category }}</p>
        </div>
        <div class="col-md-9">
        <p>{{ $author->name }}</p>
        <p>{{ $author->description }}</p>
        </div>
    </div>
@endsection
