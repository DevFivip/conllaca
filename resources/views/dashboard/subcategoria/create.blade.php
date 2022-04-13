@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Subcategorias de Productos') }}</div>

                    <div class="card-body">
                        <form action="{{ route('subcategoria.store') }}" method="POST" enctype="multipart/form-data">

                            @method('POST')
                            @csrf

                            <div class="form-group">
                                <label for="categoria_id">Categoria</label>
                                <select name="categoria_id" class="form-control">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">
                                            {{ $categoria->nombre }}
                                        </option>
                                    @endforeach

                                    {{-- @foreach ($categorias as $categorias)
                                    <option @if ($persona->sexo == $sexo)
                                        selected
                                        @endif
                                        value="{{$sexo}}">{{$sexo}}</option>
                                    @endforeach --}}


                                    <!-- <option value="MASCULINO">MASCULINO</option>
                                                <option value="FEMENINO">FEMENINO</option> -->
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="nombre">Descripción Subcategoria</label>
                                <input type="text" name="nombre" class="form-control">
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
