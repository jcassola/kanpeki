@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <img src="{{$item->picture}}" alt="">
    </div>
    <div class="col-md-4">
        <h4>{{ $item->name }}</h4>
        <p>{{ $item->price }}</p>
    </div>
    <div class="col-md-12">
        <p>{{ $item->description }}</p>
    </div>
</div>
@endsection
