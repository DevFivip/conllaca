@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Headertron') }}</div>

                    <div class="card-body">
                        <form action="{{ route('headertron.store') }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf

                            <input type="file" name="imagen" class="file" accept="image/*">

                            <div class="text-center"
                                style="height: 150px; width:150px; display: block; margin-left: auto; margin-right: auto;">
                                <img src="{{ url('storage/') }}/placeholder.jpg" id="preview" class="img-thumbnail"
                                    style="height: 150px;">
                            </div>

                            <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" name="title" class="form-control" value="">
                            </div>


                            <div class=" form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" name="descripcion" id="" rows="10"></textarea>
                            </div>

                            <div class=" form-group">
                                <label for="descripcion">Link To</label>
                                <input type="text" name="link" class="form-control" value="#!">
                            </div>

                            <br>
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
