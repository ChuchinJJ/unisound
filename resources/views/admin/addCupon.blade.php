@extends('admin.container')
@section('contenido')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="m-3">
            <h1 class="m-0">Agregar cupón</h1>
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
                                <label for="nombre" class="require-label" required>Nombre</label>
                                <input id="nombre" name="nombre" type="text" class="form-control" required placeholder="Nombre" autocomplete="off">
                            </div>
                            <div class="col-md-5 mb-4">
                                <label for="descuento" class="require-label" required>Descuento</label>
                                <input id="descuento" name="descuento" type="number" class="form-control" required placeholder="Descuento">
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="fecha_inicio" class="require-label" required>Fecha inicio</label>
                                <input id="fecha_inicio" name="fecha_inicio" type="date" class="form-control" required min="{{ $fechaVigente }}">
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="fecha_fin" class="require-label" required>Fecha fin</label>
                                <input id="fecha_fin" name="fecha_fin" type="date" class="form-control" required min="{{ $fechaVigente }}">
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="descripcion" class="require-label" required>Descripción</label>
                                <textarea id="descripcion" name="descripcion" rows="3" class="form-control" required placeholder="Descripción"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <livewire:cupon :oldProductos="[]" />
                <div class="row justify-content-center">
                    <button type="submit" id="submit" class="btn btn-danger btn-lg btn-save" disabled>Guardar <i class="fa fa-save"></i></button>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    document.getElementById('cupones').classList.add('active');
    
    function enviar(){
		document.getElementById("formulario").submit();
	}

    var submit= document.getElementById("submit");

    function agregarProducto(){
        submit.disabled = false;
    }

    function eliminarProducto(){
        var lista = document.querySelectorAll("#list-products li").length;
        if(lista < 2){
            submit.disabled = true;
        }
    }
</script>
@endsection