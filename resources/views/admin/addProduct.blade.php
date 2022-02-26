@extends('admin.container')
@section('contenido')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="m-3">
            <h1 class="m-0">Agregar Producto</h1>
        </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form>
                <div class="card">
                    <div class="card-slider">
                        <h4>General</h4>
                        <div class="row">
                            <div class="col-md-7 mb-4">
                                <label for="nombre" class="require-label" required>Nombre del producto</label>
                                <input id="nombre" name="nombre" type="text" class="form-control" required placeholder="Nombre del producto" autocomplete="off">
                            </div>
                            <div class="col-md-5 mb-4">
                                <label for="categoria" class="require-label" required>Categoría</label>
                                <select id="categoria" name="categoria" class="form-control" required>
                                    <option>Selecciona una categoría</option>
                                    <option value="1">Cuerda</option>
                                    <option value="2">Percusión</option>
                                    <option value="3">Atriles y soporte</option>
                                    <option value="4">Audio</option>
                                    <option value="5">Iluminación</option>
                                    <option value="6">Adapatadores</option>
                                    <option value="7">Accesorios</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="desc_general" class="require-label" required>Descripción general</label>
                                <textarea id="desc_general" rows="2" name="desc_general" class="form-control" required placeholder="Descripción general"></textarea>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="desc_especifica" class="require-label" required>Descripción específica</label>
                                <textarea id="desc_especifica" rows="5" name="desc_especifica" class="form-control" required placeholder="Descripción específica"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-slider">
                        <h4 class="require-label">Imagenes</h4>
                        <div class="row justify-center">
                            <div class="dropzone col-md-11" id="dropzone">
                                {{ csrf_field() }}
                                <div class="dz-message needsclick">Suelte el archivo aquí <br> o <br> haga click para cargar</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-slider">
                        <h4 class="require-label">Colores</h4>
                        <div id="field_wrapper">
                            <div class="row row-color">
                                <div class="col-md-4">
                                    <label for="color" required>Color</label>
                                    <input class="form-control" placeholder="Color" id="color" value="Default">
                                </div>
                                <div class="col-md-8 inputs-color align-items-end">
                                    <div class="col-md-5">
                                        <label for="precio" required>Precio</label>
                                        <input type="number" class="form-control" placeholder="Precio" id="precio">
                                    </div>
                                    <div class="col-md-5">
                                        <label for="cantidad" required>Cantidad</label>
                                        <input type="number" class="form-control" placeholder="Cantidad" id="cantidad">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-outline-danger" id="add_color">
                            <i class="fa fa-plus" style="margin-right: 4px;"></i> Agregar color
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" id="submit" class="btn btn-danger btn-lg btn-save">Guardar <i class="fa fa-save"></i></button>
                </div>
            </form>
        </div>
    </section>
</div>
<script>
    document.getElementById('productos').classList.add('active');
    var dropzone = new Dropzone('#dropzone', {
        parallelUploads: 2,
        maxFiles: 5,
        url:"/admin/addproducto",
        autoProcessQueue: false,
        addRemoveLinks: true,
        paramName: "file",
        maxFilesize: 3,
        filesizeBase: 1000,
        init: function() {
            this.on("success", function(file, response) {
            });
        }
    });

    $(document).ready(function(){
        var addButton = $('#add_color');
        var wrapper = $('#field_wrapper');
        var fieldHTML = 
            '<div class="nuevo-color">'
                +'<hr class="hr-color">'
                +'<div class="row row-color">'
                    +'<div class="col-md-4">'
                        +'<label for="color" required>Color</label>'
                        +'<input class="form-control" placeholder="Color" id="color">'
                    +'</div>'
                    +'<div class="col-md-8 inputs-color align-items-end">'
                        +'<div class="col-md-5">'
                            +'<label for="precio" required>Precio</label>'
                            +'<input type="number" class="form-control" placeholder="Precio" id="precio">'
                        +'</div>'
                        +'<div class="col-md-5">'
                            +'<label for="cantidad" required>Cantidad</label>'
                            +'<input type="number" class="form-control" placeholder="Cantidad" id="cantidad">'
                        +'</div>'
                        +'<div class="col-md-2 text-align-center" style="text-align: center">'
                            +'<a class="btn btn-danger remove_color"><i class="fa fa-trash"></i></a>'
                        +'</div>'
                    +'</div>'
                +'</div>'
            +'</div>';
        $(addButton).click(function(){
            $(wrapper).append(fieldHTML);
        });
        $(wrapper).on('click', '.remove_color', function(e){
            e.preventDefault();
            $(this).parents('.nuevo-color').remove();
        });
    });
</script>
@endsection