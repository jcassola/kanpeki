@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')

    <vue-back-to-top></vue-back-to-top>

    <bootstrap-carousel></bootstrap-carousel>

    <section>
        <vue-section title="Noticias">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
            <a href="{{ route('news') }}">
                <button class="btn btn-danger">Ir a noticias</button>
            </a>
        </vue-section>
    </section>
    <section>
        <vue-section title="Eventos" class="bg-dark text-light">
            <div class="row">
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                    <a href="{{ route('events') }}">
                        <button class="btn btn-danger">Ir a eventos</button>
                    </a>
                    <vue-spacer space="20"></vue-spacer>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/event.jpg') }}" class="img-fluid" alt="Events images" srcset="">
                </div>
            </div>
        </vue-section>
    </section>
    <section>
        <vue-section title="Tienda">
            <div class="row">
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                    <a href="{{ route('store') }}">
                        <button class="btn btn-danger">Ir a la tienda</button>
                    </a>
                    <vue-spacer space="20"></vue-spacer>
                </div>
                @foreach ($items as $item)
                    <div class="col-md-4">
                        <bootstrap-product-card
                                product-picture-url="{{ $item->getUrlPicture() }}"
                                product-name="{{ $item->name }}"
                                product-description="{{ $item->description }}"
                                product-price="${{ $item->price }}"
                                product-details-url="{{ route('item.show', [$item->id]) }}">
                        </bootstrap-product-card>
                    </div>
                @endforeach
            </div>
        </vue-section>
    </section>
    <section>
        <vue-section title="Artistas" class="bg-dark text-light">
            <div class="row">
                <div class="col-md-12">
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
        <vue-section title="Acerca de nosotros">
            <div class="row">
                <div class="col-md-6">
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
