@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nuevo Artículo') }}</div>
                    <div class="card-body">

                        <form enctype="multipart/form-data" method="POST" action="{{ url('/store/new') }}">
                            @csrf
                            <div class="form-group">
                                <label>Nombre:</label>
                                <input type="text" name="name" class="form-control">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Foto:</label>
                                <input type="file" name="picture" class="form-control">
                                @error('picture')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Precio:</label>
                                <input type="text" name="price" class="form-control">
                                @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Descripción:</label>
                                <textarea type="text" name="description" class="form-control"></textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button class="btn btn-success btn-submit">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
