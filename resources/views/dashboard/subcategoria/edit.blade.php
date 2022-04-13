@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Categorias de Productos') }}</div>

                    <div class="card-body">
                        <form action="{{ route('subcategoria.update', $subcategoria['id']) }}" method="POST"
                            enctype="multipart/form-data">

                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="categoria_id">Categoria</label>
                                <select name="categoria_id" class="form-control">
                                    @foreach ($categorias as $categoria)
                                        <option @if ($categoria->id == $subcategoria['categoria_id']) selected @endif
                                            value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="nombre">Descripción</label>
                                <input type="text" name="nombre" class="form-control"
                                    value="{{ $subcategoria['nombre'] }}">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary mb-2">Guardar</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
