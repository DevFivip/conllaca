@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        <div class="list-group list-group-flush">


                            <a href="{{ route('informacion.show', 1) }}" class="list-group-item list-group-item-action">
                                Informacion General
                            </a>

                            <a href="{{ route('categoria.index') }}" class="list-group-item list-group-item-action">
                                Productos Categorias
                            </a>

                            <a href="{{ route('subcategoria.index') }}" class="list-group-item list-group-item-action">
                                Productos Subcategorias
                            </a>

                            <a href="{{ route('producto.index') }}" class="list-group-item list-group-item-action">
                                Productos
                            </a>

                            <a href="{{ route('cliente.index') }}" class="list-group-item list-group-item-action">
                                Clientes - Nuestros Compradores
                            </a>

                            <a href="{{ route('testimonio.index') }}" class="list-group-item list-group-item-action">
                                Testimonios
                            </a>

                            <a href="{{ route('headertron.index') }}" class="list-group-item list-group-item-action">
                                Headertron
                            </a>

                            <a href="{{ route('horario.index') }}" class="list-group-item list-group-item-action">
                                Horarios
                            </a>

                            <a href="{{ route('redes.index') }}" class="list-group-item list-group-item-action">
                                Redes Sociales
                            </a>

                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
