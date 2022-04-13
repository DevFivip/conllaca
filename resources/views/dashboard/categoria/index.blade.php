@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Categorias de Productos') }}</div>

                    <div class="card-body">
                        <a href="/categoria/create" class="btn btn-primary">+ Categoria</a>

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>DESCRIPCIÓN</td>
                                    <td>ACTIONS</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $categoria)
                                    <tr>
                                        <td>{{ $categoria->id }}</td>
                                        <td>{{ $categoria->nombre }}</td>
                                        <td>
                                            <a href="/categoria/{{ $categoria->id }}/edit">✏️</a>
                                            <a href="#eliminar" onclick="eliminar({{ $categoria->id }})">🗑️</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <script>
                            window.CSRF_TOKEN = '{{ csrf_token() }}';

                            async function eliminar(id) {
                                if (confirm("¿Seguro deseas Eliminar?") == true) {
                                    const res = await fetch('categoria/' + id, {
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
