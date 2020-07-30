@extends('layouts.app')

@section('styles')
    

@endsection

@section('content')
    
    <div class="container nuevas-recetas">
        <h2 class="titulo-categoria text-uppercase mt-2 mb-4">Últimas Recetas</h2>
        <div class="row">
            @foreach ($nuevas as $nueva)
            <div class="col-md-4">
                <div class="card">
                    <img src="/storage/{{$nueva->imagen}}" alt="Imagen Receta" class="card-img-top">

                    <div class="card-body">
                        <h3>{{ Str::title($nueva->titulo)}}</h3>

                        <p>
                            {{ Str::words(strip_tags($nueva->preparacion), 20)}}
                        </p>

                        <a href="{{route('recetas.show', $nueva->id)}}" class="btn btn-primary d-block font-weight-bold text-uppercase">Ver Receta</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection