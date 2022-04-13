@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Horarios') }}</div>

                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>DIA</td>
                                    <td>APERTURA</td>
                                    <td>CIERRE</td>
                                    <td>ACTIONS</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($horarios as $horario)
                                    <tr>
                                        <td>{{ $horario->dia }}</td>
                                        <td>{{ $horario->apertura }}</td>
                                        <td>{{ $horario->cierre }}</td>
                                        <td>
                                            <a href="/horario/{{ $horario->id }}/edit">✏️</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <script>
                            window.CSRF_TOKEN = '{{ csrf_token() }}';

                            async function eliminar(id) {
                                if (confirm("¿Seguro deseas Eliminar?") == true) {
                                    const res = await fetch('horario/' + id, {
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
