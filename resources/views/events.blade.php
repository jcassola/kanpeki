@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
@auth
    <vue-add-new href="{{ route('new_event') }}"></vue-add-new>
@endauth
<vue-section title="Eventos">
    <vue-spacer space="20"></vue-spacer>
    <div class="row justify-content-center">
        @foreach ($events as $event)
        <div class="col-md-12">
            <div class="card">
                <a href="{{ route('event.show', [$event->id]) }}">
                    <img class="card-img-top img-fluid"  src="{{ $event->getUrlPicture() }}" alt="Un evento">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-text">{{ $event->description }}</p>
                </div>
            </div>
            <vue-spacer space="10"></vue-spacer>
        </div>
        @endforeach
    </div>
</vue-section>
@endsection
