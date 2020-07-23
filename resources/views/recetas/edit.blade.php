@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css" integrity="sha512-pTg+WiPDTz84G07BAHMkDjq5jbLS/AqY0rU/QdugnfeE0+zu0Kjz++0rrtYNK9gtzEZ33p+S53S2skXAZttrug==" crossorigin="anonymous" />
@endsection

@section('botones')

    <a href="{{route('recetas.index')}}" class="btn btn-primary mr-2">Back</a>
    
@endsection

@section('content')
    <h2 class="text-center mb-5">
        Editar Receta: {{$receta->titulo}}
    </h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form method="post" action="{{route('recetas.update', $receta->id)}}" enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')
                <div class="form-group">
                        <label for="titulo">Titulo Receta:</label>
                        <input type="text" name="titulo" class="form-control @error('titulo')
                        is-invalid
                    @enderror" id="titulo"
                        placeholder="Título Receta"
                        value="{{$receta->titulo}}">
                        
                    
                    @error('titulo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <select name="categoria" class="form-control @error('categoria')
                    is-invalid @enderror" id="categoria">
                        <option value="">-- Seleccione --</option>
                        @foreach ($categorias as $categoria)
                            <option 
                            value="{{$categoria->id}}"
                            {{ $receta->categoria_id == $categoria->id ? 'selected' : ''}}
                            >{{$categoria->nombre}}
                            </option>    
                        @endforeach
                    </select>
                        @error('categoria')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group mt-3">
                    <label for="preparacion">Preparacion:</label>
                    <input type="hidden" name="preparacion" id="preparacion" value="{{$receta->preparacion}}">
                    <trix-editor
                    class="form-control @error('preparacion')
                    is-invalid @enderror"
                    input="preparacion"></trix-editor>
                    @error('preparacion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label for="ingredientes">Ingredientes:</label>
                    <input type="hidden" name="ingredientes" id="ingredientes" value="{{$receta->ingredientes}}">
                    <trix-editor
                        class="form-control @error('ingredientes')
                        is-invalid @enderror"
                        input="ingredientes">
                    </trix-editor>
                    @error('ingredientes')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="imagen">Elige la Imagen:</label>
                    <input type="file" src="" alt="Imagen receta" id="imagen" class="form-control @error('imagen')
                    is-invalid @enderror" name="imagen">

                    <div class="mt-4">
                        <p>Imagen Actual:</p>

                        <img src="/storage/{{$receta->imagen}}" alt="Imagen a editar" style="width: 300px">
                    </div>

                    @error('imagen')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Agregar Receta">
                </div>
            </form>
        </div>
    </div>

    @section('scripts')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js" integrity="sha512-EkeUJgnk4loe2w6/w2sDdVmrFAj+znkMvAZN6sje3ffEDkxTXDiPq99JpWASW+FyriFah5HqxrXKmMiZr/2iQA==" crossorigin="anonymous" defer></script>
    @endsection

@endsection
