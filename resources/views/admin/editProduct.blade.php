@extends('admin.container')
@section('contenido')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="m-3">
            <h1 class="m-0">Editar Producto</h1>
        </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form action="" method="post" id="formulario">
                @csrf
                <div class="card">
                    <div class="card-slider">
                        <h4>General</h4>
                        <div class="row">
                            <div class="col-md-7 mb-4">
                                <label for="nombre" class="require-label" required>Nombre del producto</label>
                                <input id="nombre" name="nombre" type="text" class="form-control" required placeholder="Nombre del producto" value="{{ $producto->nombre }}" autocomplete="off">
                            </div>
                            <div class="col-md-5 mb-4">
                                <label for="categoria" class="require-label" required>Categoría</label>
                                <select id="categoria" name="categoria" class="form-control" required>
                                    <option value="1" @if($categoria == "Cuerda") selected='selected' @endif>Cuerda</option>
                                    <option value="2" @if($categoria == "Percusión") selected='selected' @endif>Percusión</option>
                                    <option value="3" @if($categoria == "Atriles y soporte") selected='selected' @endif>Atriles y soporte</option>
                                    <option value="4" @if($categoria == "Audio") selected='selected' @endif>Audio</option>
                                    <option value="5" @if($categoria == "Iluminación") selected='selected' @endif>Iluminación</option>
                                    <option value="6" @if($categoria == "Adapatadores") selected='selected' @endif>Adapatadores</option>
                                    <option value="7" @if($categoria == "Accesorios") selected='selected' @endif>Accesorios</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="desc_general" class="require-label" required>Descripción general</label>
                                <textarea id="desc_general" rows="2" name="desc_general" class="form-control" required placeholder="Descripción general">{{ $producto->descripcion_general }}</textarea>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="desc_detallada" class="require-label" required>Descripción detallada</label>
                                <textarea id="desc_detallada" rows="5" name="desc_detallada" class="form-control" required placeholder="Descripción detallada">{{ $producto->descripcion_detallada }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-slider">
                        <h4 class="require-label">Imagenes</h4>
                        <div class="row justify-center row-imagenes-product">
                            <div class="col-md-auto mb-2">
                                <div class="dropzone" id="dropzone1">
                                    <div class="dz-message needsclick">Suelte el archivo aquí <br> o <br> haga click para cargar</div>
                                </div>
                                <label>Imagen 1</label>
                                <input type="hidden" name="imagen1" id="imagen1" value="{{ $producto->imagen1 }}" >
                            </div>
                            <div class="col-md-auto mb-2">
                                <div class="dropzone" id="dropzone2">
                                    <div class="dz-message needsclick">Suelte el archivo aquí <br> o <br> haga click para cargar</div>
                                </div>
                                <label>Imagen 2</label>
                                <input type="hidden" name="imagen2" id="imagen2" value="{{ $producto->imagen2 }}" >
                            </div>
                            <div class="col-md-auto mb-2">
                                <div class="dropzone" id="dropzone3">
                                    <div class="dz-message needsclick">Suelte el archivo aquí <br> o <br> haga click para cargar</div>
                                </div>
                                <label>Imagen 3</label>
                                <input type="hidden" name="imagen3" id="imagen3" value="{{ $producto->imagen3 }}" >
                            </div>
                            <div class="col-md-auto mb-2">
                                <div class="dropzone" id="dropzone4">
                                    <div class="dz-message needsclick">Suelte el archivo aquí <br> o <br> haga click para cargar</div>
                                </div>
                                <label>Imagen 4</label>
                                <input type="hidden" name="imagen4" id="imagen4" value="{{ $producto->imagen4 }}" >
                            </div>
                            <div class="col-md-auto mb-2">
                                <div class="dropzone" id="dropzone5">
                                    <div class="dz-message needsclick">Suelte el archivo aquí <br> o <br> haga click para cargar</div>
                                </div>
                                <label>Imagen 5</label>
                                <input type="hidden" name="imagen5" id="imagen5" value="{{ $producto->imagen5 }}" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-slider">
                        <h4 class="require-label">Colores</h4>
                        <div id="field_wrapper">
                            @foreach($colores as $color)
                                @if($loop->first)
                                <div class="row row-color">
                                    <input type="hidden" name="id_color[]" value="{{ $color->id_color }}" >
                                    <div class="col-md-4">
                                        <label for="color" required>Color</label>
                                        <input class="form-control" placeholder="Color" name="color[]" id="color" value="{{ $color->color}}" required>
                                    </div>
                                    <div class="col-md-8 inputs-color align-items-end">
                                        <div class="col-md-5">
                                            <label for="precio">Precio</label>
                                            <input type="number" class="form-control" placeholder="Precio" name="precio[]" id="precio" value="{{ $color->precio}}" required>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="cantidad">Cantidad</label>
                                            <input type="number" class="form-control" placeholder="Cantidad" name="cantidad[]" id="cantidad" value="{{ $color->cantidad}}" required>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="nuevo-color">
                                    <hr class="hr-color">
                                    <div class="row row-color">
                                        <input type="hidden" name="id_color[]" value="{{ $color->id_color}}" >
                                        <div class="col-md-4">
                                            <label for="color">Color</label>
                                            <input class="form-control" placeholder="Color" id="color" name="color[]" value="{{ $color->color}}" required>
                                        </div>
                                        <div class="col-md-8 inputs-color align-items-end">
                                            <div class="col-md-5">
                                                <label for="precio">Precio</label>
                                                <input type="number" class="form-control" placeholder="Precio" id="precio" name="precio[]" value="{{ $color->precio}}" required>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="cantidad">Cantidad</label>
                                                <input type="number" class="form-control" placeholder="Cantidad" id="cantidad" name="cantidad[]" value="{{ $color->cantidad}}" required>
                                            </div>
                                            <div class="col-md-2 text-align-center" style="text-align: center">
                                                <a class="btn btn-danger remove_color"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <a class="btn btn-outline-danger" id="add_color">
                            <i class="fa fa-plus" style="margin-right: 4px;"></i> Agregar color
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" id="submit_btn" class="btn btn-danger btn-lg btn-save">Guardar <i class="fa fa-save"></i></button>
                </div>
            </form>
        </div>
    </section>
</div>
<script>
    document.getElementById('productos').classList.add('active');
    var img1add = true;
    var img2add = true;
    var img3add = true;
    var img4add = true;
    var img5add = true;
    var dropzone1 = new Dropzone('#dropzone1', {
        parallelUploads: 1,
        maxFiles: 1,
        url:"/admin/producto/addimage",
        addRemoveLinks: true,
        paramName: "file",
        maxFilesize: 3,
        filesizeBase: 1000,
        acceptedFiles: "image/jpeg,image/png,image/jpg",
        autoProcessQueue: false,
        uploadMultiple: true,
        init: function() {
            this.on("addedfile", file => {
                if(dropzone1.files.length != 0){
                    img1add = false;
                }
            });

            this.on("removedfile", file => {
                document.getElementById("imagen1").value="";
            });

            this.on("sendingmultiple", function(data, xhr, formData) {
                formData.append("_token", jQuery("input[name=_token]").val());
            });

            this.on("successmultiple", function(file, response) {
                img1add=true;
                document.getElementById("imagen1").value=response;
                console.log(document.getElementById("imagen1").value);
                if(img1add && img2add && img3add && img4add && img5add){
                    document.getElementById("formulario").submit();
                }
            });

            this.on("errormultiple", function(files, response) {
                console.log(response);
            });
        }
    });

    var dropzone2 = new Dropzone('#dropzone2', {
        parallelUploads: 1,
        maxFiles: 1,
        url:"/admin/producto/addimage",
        addRemoveLinks: true,
        paramName: "file",
        maxFilesize: 3,
        filesizeBase: 1000,
        acceptedFiles: "image/jpeg,image/png,image/jpg",
        autoProcessQueue: false,
        uploadMultiple: true,
        init: function() {
            this.on("addedfile", file => {
                if(dropzone2.files.length != 0){
                    img2add = false;
                }
            });

            this.on("removedfile", file => {
                document.getElementById("imagen2").value="";
            });

            this.on("sendingmultiple", function(data, xhr, formData) {
                formData.append("_token", jQuery("input[name=_token]").val());
            });

            this.on("successmultiple", function(file, response) {
                img2add=true;
                document.getElementById("imagen2").value=response;
                console.log(dropzone3.files.length);
                if(img1add && img2add && img3add && img4add && img5add){
                    if (document.getElementById("imagen1").value != "") {
                        document.getElementById("formulario").submit();
                    }else {
                        alert("Imagen 1 no debe de estar vacío")
                    }
                }
            });

            this.on("errormultiple", function(files, response) {
                console.log(response);
            });
        }
    });

    var dropzone3 = new Dropzone('#dropzone3', {
        parallelUploads: 1,
        maxFiles: 1,
        url:"/admin/producto/addimage",
        addRemoveLinks: true,
        paramName: "file",
        maxFilesize: 3,
        filesizeBase: 1000,
        acceptedFiles: "image/jpeg,image/png,image/jpg",
        autoProcessQueue: false,
        uploadMultiple: true,
        init: function() {
            this.on("addedfile", file => {
                if(dropzone3.files.length != 0){
                    img3add = false;
                }
            });

            this.on("removedfile", file => {
                document.getElementById("imagen3").value="";
            });

            this.on("sendingmultiple", function(data, xhr, formData) {
                formData.append("_token", jQuery("input[name=_token]").val());
            });

            this.on("successmultiple", function(file, response) {
                img3add=true;
                document.getElementById("imagen3").value=response;
                if(img1add && img2add && img3add && img4add && img5add){
                    if (document.getElementById("imagen1").value != "") {
                        document.getElementById("formulario").submit();
                    }else {
                        alert("Imagen 1 no debe de estar vacío")
                    }
                }
            });

            this.on("errormultiple", function(files, response) {
                console.log(response);
            });
        }
    });

    var dropzone4 = new Dropzone('#dropzone4', {
        parallelUploads: 1,
        maxFiles: 1,
        url:"/admin/producto/addimage",
        addRemoveLinks: true,
        paramName: "file",
        maxFilesize: 3,
        filesizeBase: 1000,
        acceptedFiles: "image/jpeg,image/png,image/jpg",
        autoProcessQueue: false,
        uploadMultiple: true,
        init: function() {
            this.on("addedfile", file => {
                if(dropzone4.files.length != 0){
                    img4add = false;
                }
            });

            this.on("removedfile", file => {
                document.getElementById("imagen4").value="";
            });

            this.on("sendingmultiple", function(data, xhr, formData) {
                formData.append("_token", jQuery("input[name=_token]").val());
            });

            this.on("successmultiple", function(file, response) {
                img4add=true;
                document.getElementById("imagen4").value=response;
                if(img1add && img2add && img3add && img4add && img5add){
                    if (document.getElementById("imagen1").value != "") {
                        document.getElementById("formulario").submit();
                    }else {
                        alert("Imagen 1 no debe de estar vacío")
                    }
                }
            });

            this.on("errormultiple", function(files, response) {
                console.log(response);
            });
        }
    });

    var dropzone5 = new Dropzone('#dropzone5', {
        parallelUploads: 1,
        maxFiles: 1,
        url:"/admin/producto/addimage",
        addRemoveLinks: true,
        paramName: "file",
        maxFilesize: 3,
        filesizeBase: 1000,
        acceptedFiles: "image/jpeg,image/png,image/jpg",
        autoProcessQueue: false,
        uploadMultiple: true,
        init: function() {
            this.on("addedfile", file => {
                if(dropzone5.files.length != 0){
                    img5add = false;
                }
            });

            this.on("removedfile", file => {
                document.getElementById("imagen5").value="";
            });

            this.on("sendingmultiple", function(data, xhr, formData) {
                formData.append("_token", jQuery("input[name=_token]").val());
            });

            this.on("successmultiple", function(file, response) {
                img5add=true;
                document.getElementById("imagen5").value=response;
                if(img1add && img2add && img3add && img4add && img5add){
                    if (document.getElementById("imagen1").value != "") {
                        document.getElementById("formulario").submit();
                    }else {
                        alert("Imagen 1 no debe de estar vacío")
                    }
                }
            });

            this.on("errormultiple", function(files, response) {
                console.log(response);
            });
        }
    });
    const imagen1 = "{{ $producto->imagen1 }}";
    let mockFile1 = { name: imagen1, size: 12345};
    dropzone1.displayExistingFile(mockFile1, 'http://127.0.0.1:8000/storage/img/products/'+imagen1);
    if("{{ $producto->imagen2 }}" != ""){
        const imagen2 = "{{ $producto->imagen2 }}";
        let mockFile2 = { name: imagen2, size: 12345 };
        dropzone2.displayExistingFile(mockFile2, 'http://127.0.0.1:8000/storage/img/products/'+imagen2);
    }
    if("{{ $producto->imagen3 }}" != ""){
        const imagen3 = "{{ $producto->imagen3 }}";
        let mockFile3 = { name: imagen3, size: 12345 };
        dropzone3.displayExistingFile(mockFile3, 'http://127.0.0.1:8000/storage/img/products/'+imagen3);
    }
    if("{{ $producto->imagen4 }}" != ""){
        const imagen4 = "{{ $producto->imagen4 }}";
        let mockFile4 = { name: imagen4, size: 12345 };
        dropzone4.displayExistingFile(mockFile4, 'http://127.0.0.1:8000/storage/img/products/'+imagen4);
    }
    if("{{ $producto->imagen5 }}" != ""){
        const imagen5 = "{{ $producto->imagen5 }}";
        let mockFile5 = { name: imagen5, size: 12345 };
        dropzone5.displayExistingFile(mockFile5, 'http://127.0.0.1:8000/storage/img/products/'+imagen5);
    }

    document.getElementById("submit_btn").addEventListener("click", function(e) {
        const nombre = document.getElementById("nombre");
        const descripcion = document.getElementById("categoria");
        const desc_general = document.getElementById("desc_general");
        const desc_detallada = document.getElementById("desc_detallada");
        if (nombre.checkValidity() && categoria.checkValidity() && desc_general.checkValidity() 
            && desc_detallada.checkValidity() && validarColor()) {
            e.preventDefault();
            e.stopPropagation();
            if (dropzone1.getQueuedFiles().length > 0 || dropzone2.getQueuedFiles().length > 0 || 
              dropzone3.getQueuedFiles().length > 0 || dropzone4.getQueuedFiles().length > 0 || 
              dropzone5.getQueuedFiles().length > 0) {
                dropzone1.processQueue();
                dropzone2.processQueue();
                dropzone3.processQueue();
                dropzone4.processQueue();
                dropzone5.processQueue();
            }else{
                document.getElementById("formulario").submit();
            }
        }
    });

    function validarColor(){
        const color = document.getElementsByName("color[]");
        const precio = document.getElementsByName("precio[]");
        const cantidad = document.getElementsByName("cantidad[]");
        var estado = true;
        for(var i=0; i<color.length; i++){
            if(!color[i].checkValidity() || !precio[i].checkValidity() || !cantidad[i].checkValidity()){
                estado=false;
            }
        }
        return estado;
    }

    $(document).ready(function(){
        var addButton = $('#add_color');
        var wrapper = $('#field_wrapper');
        var fieldHTML = 
            '<div class="nuevo-color">'
                +'<hr class="hr-color">'
                +'<div class="row row-color">'
                    +'<div class="col-md-4">'
                        +'<label for="color">Color</label>'
                        +'<input class="form-control" placeholder="Color" id="color" name="color[]" required>'
                    +'</div>'
                    +'<div class="col-md-8 inputs-color align-items-end">'
                        +'<div class="col-md-5">'
                            +'<label for="precio">Precio</label>'
                            +'<input type="number" class="form-control" placeholder="Precio" id="precio" name="precio[]" required>'
                        +'</div>'
                        +'<div class="col-md-5">'
                            +'<label for="cantidad">Cantidad</label>'
                            +'<input type="number" class="form-control" placeholder="Cantidad" id="cantidad" name="cantidad[]" required>'
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
            var padre = $(this).parents('.nuevo-color');
            idEliminar=padre.find('input[name="id_color[]"]').val();
            var inputDelete = '<input type="hidden" name="color_delete[]" value="'+idEliminar+'" >';
            $(wrapper).append(inputDelete);
            $(this).parents('.nuevo-color').remove();
        });
    });
</script>
@endsection