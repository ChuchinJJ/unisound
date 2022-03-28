
<?php $__env->startSection('contenido'); ?>
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
            <form action="/admin/addproducto" method="post" id="formulario">
                <?php echo csrf_field(); ?>
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
                                    <option value="" selected='selected'>Selecciona una categoría</option>
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
                                <label for="desc_detallada" class="require-label" required>Descripción detallada</label>
                                <textarea id="desc_detallada" rows="5" name="desc_detallada" class="form-control" required placeholder="Descripción detallada"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-slider">
                        <h4 class="require-label">Imágenes</h4>
                        <small>*Puedes agregar de 1 a 5 imágenes</small>
                        <div class="row justify-center">
                            <div class="dropzone col-md-11" id="dropzone">
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
                                    <input class="form-control" placeholder="Color" name="color[]" id="color" value="Default" required>
                                </div>
                                <div class="col-md-8 inputs-color align-items-end">
                                    <div class="col-md-5">
                                        <label for="precio">Precio</label>
                                        <input type="number" class="form-control" placeholder="Precio" name="precio[]" id="precio" required>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="cantidad">Cantidad</label>
                                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad[]" id="cantidad" required>
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
                    <button type="submit" id="submit" class="btn btn-danger btn-lg btn-save" disabled>Guardar <i class="fa fa-save"></i></button>
                </div>
            </form>
        </div>
    </section>
</div>
<script>
    document.getElementById('productos').classList.add('active');
    var dropzone = new Dropzone('#dropzone', {
        parallelUploads: 5,
        maxFiles: 5,
        url:"/admin/addproducto",
        addRemoveLinks: true,
        paramName: "file",
        maxFilesize: 3,
        filesizeBase: 1000,
        uploadMultiple: true,
        autoProcessQueue: false,
        acceptedFiles: "image/jpeg,image/png,image/jpg",
        init: function() {
            this.on("addedfile", file => {
                document.getElementById("submit").disabled = false;
            });

            this.on("sendingmultiple", function(data, xhr, formData) {
                formData.append("_token", jQuery("input[name=_token]").val());
                formData.append("nombre", jQuery("input[name=nombre]").val());
                formData.append("categoria", jQuery("select[name=categoria]").val());
                formData.append("desc_general", jQuery("textarea[name=desc_general]").val());
                formData.append("desc_detallada", jQuery("textarea[name=desc_detallada]").val());
                var countColores = document.getElementsByName("color[]").length;
                for(i=0;i<countColores;i++){
                    formData.append("color[]", document.getElementsByName("color[]")[i].value);
                    formData.append("precio[]", document.getElementsByName("precio[]")[i].value);
                    formData.append("cantidad[]", document.getElementsByName("cantidad[]")[i].value);
                };
            });
            this.on("successmultiple", function(files, response) {
                window.location.href='/admin/complete-product';
            });
            this.on("errormultiple", function(files, response) {
                console.log(response);
            });
        }
    });

    document.getElementById("submit").addEventListener("click", function(e) {
        const nombre = document.getElementById("nombre");
        const descripcion = document.getElementById("categoria");
        const desc_general = document.getElementById("desc_general");
        const desc_detallada = document.getElementById("desc_detallada");
        if (nombre.checkValidity() && categoria.checkValidity() && desc_general.checkValidity() 
            && desc_detallada.checkValidity() && validarColor()) {
            e.preventDefault();
            e.stopPropagation();
            dropzone.processQueue();
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
            $(this).parents('.nuevo-color').remove();
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/admin/addProduct.blade.php ENDPATH**/ ?>