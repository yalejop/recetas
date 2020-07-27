@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css" integrity="sha512-pTg+WiPDTz84G07BAHMkDjq5jbLS/AqY0rU/QdugnfeE0+zu0Kjz++0rrtYNK9gtzEZ33p+S53S2skXAZttrug==" crossorigin="anonymous" />
@endsection

@section('botones')

    <a href="{{route('recetas.index')}}" class="btn btn-primary mr-2">Back</a>
    
@endsection


@section('content')
  {{--   {{$perfil}}     --}}

    <h1 class="text-center">Editar Mi Perfil</h1>
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 bg-white p-3">
            <form action="">
                <div class="form-group">
                    <label for="titulo">Nombre:</label>
                    <input type="text" 
                    name="nombre" 
                    class="form-control @error('nombre')
                        is-invalid
                    @enderror" 
                    id="nombre"
                    placeholder="Tu Nombre">
                    {{-- value="{{$perfil->nombre}}"> --}}
                        
                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="url">Sitio Web:</label>
                    <input type="text" 
                    name="url" 
                    class="form-control @error('url')
                        is-invalid
                    @enderror" 
                    id="url"
                    placeholder="Tu Sitio Web"
                    value="{{$perfil->url}}">
                        
                    @error('url')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="biografia">Biografia:</label>
                    <input type="hidden" name="biografia" id="biografia">
                    <trix-editor
                    class="form-control @error('biografia')
                    is-invalid @enderror"
                    input="biografia"></trix-editor>
                    @error('biografia')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="imagen">Tu Imagen:</label>
                    <input type="file" 
                    src="" 
                    alt="Imagen receta" 
                    id="imagen" 
                    class="form-control @error('imagen')
                    is-invalid @enderror" 
                    name="imagen">

                     @if ( $perfil->imagen)
                        <div class="mt-4">
                            <p>Imagen Actual:</p>
    {{-- 
                            <img src="/storage/{{$receta->imagen}}" alt="Imagen a editar" style="width: 300px"> --}}
                        </div>

                        @error('imagen')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    @endif
                </div>
            </form>
        </div>
    </div>
    

@endsection

@section('scripts')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js" integrity="sha512-EkeUJgnk4loe2w6/w2sDdVmrFAj+znkMvAZN6sje3ffEDkxTXDiPq99JpWASW+FyriFah5HqxrXKmMiZr/2iQA==" crossorigin="anonymous" defer></script>
    @endsection