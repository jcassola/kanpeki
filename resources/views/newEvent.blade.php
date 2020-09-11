@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nuevo Evento') }}</div>
                    <div class="card-body">

                        <form enctype="multipart/form-data" method="POST" action="{{ url('/events/new') }}">
                            @csrf
                            <div class="form-group">
                                <label>Título:</label>
                                <input type="text" name="title" class="form-control">
                                @error('title')
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
