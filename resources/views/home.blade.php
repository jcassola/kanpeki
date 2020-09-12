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
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
        </vue-section>
    </section>
    <section>
        <vue-section title="Artistas" class="bg-dark text-light">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
        </vue-section>
    </section>
    <section>
        <vue-section title="Contactos">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
        </vue-section>
    </section>

@endsection
