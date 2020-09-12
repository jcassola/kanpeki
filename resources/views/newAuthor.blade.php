@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nuevo Autor') }}</div>
                    <div class="card-body">

                        <form enctype="multipart/form-data" method="POST" action="{{ url('/authors/new') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Nombre:</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nick:</label>
                                <input type="text" name="nick" class="form-control">
                                @error('nick')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Foto:</label>
                                <input type="file" name="picture" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Descripción:</label>
                                <textarea type="text" name="description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Categoría:</label>
                            <select name="category">
                                <option value="dibujo" selected>Dibujo</option>
                                <option value="musica">Musica</option>
                                <option value="videos">Videos</option>
                            </select>
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
