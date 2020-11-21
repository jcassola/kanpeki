@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')

<vue-back-to-top></vue-back-to-top>

<bootstrap-carousel></bootstrap-carousel>

<section>
    <vue-section>
        <div class="row">
            <div class="col-md-6">
                <h1>Noticias</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                <a href="{{ route('news') }}">
                    <button class="btn btn-danger">Ir a noticias</button>
                </a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/news.svg') }}" class="img-fluid" alt="Imagen de noticias" srcset="">
            </div>
        </div>
    </vue-section>
</section>
<section>
    <vue-section class="bg-dark text-light">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/events.svg') }}" class="img-fluid" alt="Events images" srcset="">
            </div>
            <div class="col-md-6">

                <h1>Eventos</h1>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                <a href="{{ route('events') }}">
                    <button class="btn btn-danger">Ir a eventos</button>
                </a>
                <vue-spacer space="20"></vue-spacer>
            </div>

        </div>
    </vue-section>
</section>
<section>
    <vue-section>
        <div class="row">
            <div class="col-md-6">
                <h1>Tienda</h1>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                <a href="{{ route('store') }}">
                    <button class="btn btn-danger">Ir a la tienda</button>
                </a>
                <vue-spacer space="20"></vue-spacer>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/store.svg') }}" class="img-fluid" alt="Imagen de noticias" srcset="">
            </div>
            @foreach ($items as $item)
            <div class="col-md-4">
                <bootstrap-product-card product-picture-url="{{ $item->getUrlPicture() }}" product-name="{{ $item->name }}" product-description="{{ $item->description }}" product-price="${{ $item->price }}" product-details-url="{{ route('item.show', [$item->id]) }}">
                </bootstrap-product-card>
            </div>
            @endforeach
        </div>
    </vue-section>
</section>
<section>
    <vue-section class="bg-dark text-light">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/artists.svg') }}" class="img-fluid" alt="Imagen de noticias" srcset="">
            </div>
            <div class="col-md-6">
                <h1>Artistas</h1>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                <a href="{{ route('authors') }}">
                    <button class="btn btn-danger">Ver autores</button>
                </a>
                <vue-spacer space="20"></vue-spacer>
            </div>

            @foreach ($authors as $author)
            <div class="col-md-4 text-dark">
                <div class="card">
                    <img class="card-img-top" src="{{ $author->getUrlPicture() }}" alt="Un artista">
                    <div class="card-body">
                        <h5 class="card-title">{{ $author->nick }}</h5>
                        <p class="card-text">{{ $author->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </vue-section>
</section>
<section>
    <vue-section>
        <div class="row">
            <div class="col-md-6">
                <h1>Acerca de nosotros</h1>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>

                <a href="{{ route('about') }}">
                    <button class="btn btn-danger">Ir a informacion del grupo</button>
                </a>
                <vue-spacer space="20"></vue-spacer>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/logo.jpg') }}" class="img-fluid" alt="Events images" srcset="">
            </div>
        </div>
    </vue-section>
</section>
@endsection
