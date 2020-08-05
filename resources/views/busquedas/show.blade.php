@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="titulo-categoria text-uppercase mt-1 mb-4">
            Resultados Búsqueda: {{$busqueda}}
        </h2>

        <div class="row">
            @foreach ($recetas as $receta)
            <div class="card">
                <img src="/storage/{{$receta->imagen}}" alt="Imagen Receta" class="card-img-top">

                <div class="card-body">
                    <h3>{{ Str::title($receta->titulo)}}</h3>

                    <p>
                        {{ Str::words(strip_tags($receta->preparacion), 20)}}
                    </p>

                    <a href="{{route('recetas.show', $receta->id)}}" class="btn btn-primary d-block font-weight-bold text-uppercase">Ver Receta</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{$recetas->links()}}
        </div>
    </div>
@endsection