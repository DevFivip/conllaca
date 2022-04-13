@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Productos') }}</div>

                    <div class="card-body">
                        <a href="/producto/create" class="btn btn-primary">+ Producto</a>
                        &nbsp;
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>IMG</td>
                                    <td>DESCRIPCIÓN</td>
                                    <td>CATEGORIA</td>
                                    <td>SUBCATEGORIA</td>
                                    <td>ACTIONS</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td>{{ $producto->id }}</td>
                                        <td> <img
                                                style="display: block; margin-left: auto; margin-right: auto; max-height:150px;"
                                                src="{{ url('storage/') }}/{{ $producto->imagen }}"
                                                class="rounded" alt="producto"></td>
                                        <td>{{ $producto->producto_nombre }}</td>
                                        <td>{{ $producto->categoria->nombre }}</td>
                                        <td>{{ $producto->subcategoria->nombre }}</td>
                                        <td>
                                            <a href="/producto/{{ $producto->id }}/edit">✏️</a>
                                            <a href="#eliminar" onclick="eliminar({{ $producto->id }})">🗑️</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <script>
                            window.CSRF_TOKEN = '{{ csrf_token() }}';

                            async function eliminar(id) {
                                if (confirm("¿Seguro deseas Eliminar?") == true) {
                                    const res = await fetch('producto/' + id, {
                                        method: 'DELETE',
                                        headers: {
                                            "Content-Type": "application/json",
                                            "Accept": "application/json",
                                            "X-Requested-With": "XMLHttpRequest",
                                            "X-CSRF-Token": window.CSRF_TOKEN
                                        },
                                    })

                                    location.reload()
                                }
                            }
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
