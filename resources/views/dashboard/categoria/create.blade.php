@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Categorias de Productos') }}</div>

                    <div class="card-body">
                        <form action="{{ route('categoria.store') }}" method="POST" enctype="multipart/form-data">

                            @method('POST')
                            @csrf

                            <div class="form-group">
                                <label for="nombre">Descripción</label>
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
