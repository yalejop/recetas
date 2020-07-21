@extends('layouts.app')

@section('botones')

    <a href="{{route('recetas.index')}}" class="btn btn-primary mr-2">Back</a>
    
@endsection

@section('content')

    <h2 class="text-center mb-5">
        Crear Nuevas Recetas
    </h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form method="post" action="{{route('recetas.store')}}" novalidate>
                @csrf
                <div class="form-group">
                    <label for="titulo">Titulo Receta:</label>
                    <input type="text" name="titulo" class="form-control @error('titulo')
                    is-invalid
                @enderror" id="titulo"
                    placeholder="Título Receta"
                    value="{{old('titulo')}}">
                    
                </div>
                @error('titulo')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Agregar Receta">
                </div>
            </form>
        </div>
    </div>


@endsection
