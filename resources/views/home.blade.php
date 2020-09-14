@extends('layouts.app')

@section('content')

<div class="container">
    <bootstrap-carousel></bootstrap-carousel>
</div>

    <section>
        <vue-section title="Noticias">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
        </vue-section>
    </section>
    <section>
        <vue-section title="Eventos" class="bg-dark text-light">
            <div class="row">
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
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
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Un producto">
                        <div class="card-body">
                            <h5 class="card-title">Nombre del producto</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Ver en la tienda</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Un producto">
                        <div class="card-body">
                            <h5 class="card-title">Nombre del producto</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Ver en la tienda</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Un producto">
                        <div class="card-body">
                            <h5 class="card-title">Nombre del producto</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Ver en la tienda</a>
                        </div>
                    </div>
                </div>
            </div>
        </vue-section>
    </section>
    <section>
        <vue-section title="Artistas" class="bg-dark text-light">
            <div class="row">
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                </div>
                <div class="col-md-4 text-dark">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Un artista">
                        <div class="card-body">
                            <h5 class="card-title">Nick del artista</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-dark">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Un artista">
                        <div class="card-body">
                            <h5 class="card-title">Nick del artista</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-dark">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Un artista">
                        <div class="card-body">
                            <h5 class="card-title">Nick del artista</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </vue-section>
    </section>
    <section>
        <vue-section title="Contactos">
            <div class="row">
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/logo.jpg') }}" class="img-fluid" alt="Events images" srcset="">
                </div>
            </div>
        </vue-section>
    </section>
<section>
    <vue-section title="">
        <social-links></social-links>
    </vue-section>
</section>
@endsection
