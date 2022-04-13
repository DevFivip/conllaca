@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Informacion General') }}</div>

                    <div class="card-body">
                        <form action="{{ route('informacion.update', 1) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="empresa_nombre">Nombre de la Empresa</label>
                                <input type="text" name="empresa_nombre" class="form-control"
                                    value="{{ $info['empresa_nombre'] }}">
                            </div>

                            <div class="form-group">
                                <label for="telefono">telefono</label>
                                <input type="text" name="telefono" class="form-control" value="{{ $info['telefono'] }}">
                            </div>

                            <div class="form-group">
                                <label for="telefono2">telefono segundario</label>
                                <input type="text" name="telefono2" class="form-control"
                                    value="{{ $info['telefono2'] }}">
                            </div>

                            <div class="form-group">
                                <label for="whatapp">Whatapp</label>
                                <input type="text" name="whatapp" class="form-control" value="{{ $info['whatapp'] }}">
                            </div>

                            <div class=" form-group">
                                <label for="empresa_descripcion">Descripción</label>
                                <textarea class="form-control" name="descripcion" id=""
                                    rows="10">{{ $info['empresa_descripcion'] }}</textarea>
                            </div>


                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" name="email" class="form-control" value="{{ $info['email'] }}">
                            </div>

                            <div class="form-group">
                                <label for="email2">Correo Electrónico</label>
                                <input type="email" name="email2" class="form-control" value="{{ $info['email2'] }}">
                            </div>

                            {{-- <div class="form-group">
                                <label for="logo">Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div> --}}




                            <div class="form-group mt-2">
                                <label for="email2">Logo de mi empresa</label>
                                <input type="file" name="logo" class="file form-control" accept="image/*">

                                <div class="text-center mt-4"
                                    style="height: 250px; width:250px; display: block; margin-left: auto; margin-right: auto;">
                                    <img src="{{ url('storage/') }}/{{ $info['logo'] }}" id="preview"
                                        class="img-thumbnail">
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Guardar</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });
    </script>
@endsection
