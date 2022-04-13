@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Testimonios') }}</div>

                    <div class="card-body">
                        <a href="/testimonio/create" class="btn btn-primary">+ Testimonios</a>
                        &nbsp;
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>IMG</td>
                                    <td>NOMBRE</td>
                                    <td>COMENTARIO</td>
                                    <td>ACTIONS</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonios as $testimonio)
                                    <tr>
                                        <td>{{ $testimonio->id }}</td>
                                        <td><img style="display: block; margin-left: auto; margin-right: auto; max-height:150px;"
                                                src="{{ url('storage/') }}/{{ $testimonio->imagen }}"
                                                class="rounded" alt="testimonio"></td>
                                        <td>{{ $testimonio->title }}</td>
                                        <td>{{ $testimonio->descripcion }}</td>
                                        <td>
                                            <a href="/testimonio/{{ $testimonio->id }}/edit">✏️</a>
                                            <a href="#eliminar" onclick="eliminar({{ $testimonio->id }})">🗑️</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <script>
                            window.CSRF_TOKEN = '{{ csrf_token() }}';

                            async function eliminar(id) {
                                if (confirm("¿Seguro deseas Eliminar?") == true) {
                                    const res = await fetch('testimonio/' + id, {
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
