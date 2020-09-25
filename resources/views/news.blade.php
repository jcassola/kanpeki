@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
@auth
    <vue-add-new href="{{ route('new_news') }}"></vue-add-new>
@endauth
<vue-section title="Noticias">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Ropa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Estampillas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Otros</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <vue-spacer space="20"></vue-spacer>
    <div class="row justify-content-center">
        @foreach ($news as $news)
            <bootstrap-news-card
                    news-picture-url="{{ $news->picture }}"
                    news-title="{{ $news->title }}"
                    news-text="{{ $news->text }}"
                    news-date="{{ $news->created_at }}"
                    news-details-url="{{ route('news.show', [$news->id]) }}">
            </bootstrap-news-card>
        @endforeach
    </div>
</vue-section>
@endsection
