@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Horario') }}</div>

                    <div class="card-body">
                        <form action="{{ route('horario.update', $horario->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="dia">Dia</label>
                                <input type="text" name="dia" class="form-control" value="{{ $horario->dia }}">
                            </div>

                            <div class="form-group">
                                <label for="apertura">Apertura</label>
                                <input type="text" name="apertura" class="form-control" value="{{ $horario->apertura }}">
                            </div>

                            <div class="form-group">
                                <label for="cierre">Cierre</label>
                                <input type="text" name="cierre" class="form-control" value="{{ $horario->cierre }}">
                            </div>


                            <br>
                            <button type="submit" class="btn btn-primary mb-2">Guardar</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
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
