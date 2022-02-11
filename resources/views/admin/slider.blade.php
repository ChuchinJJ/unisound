@extends('admin.container')
@section('contenido')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 align-items-center">
          <div class="col-sm-6">
            <h1 class="m-0">Sliders</h1>
          </div>
          <div class="col-sm-6 btn-top">
            <a class="btn btn-danger btn-lg" href="/admin/addslider">Agregar <i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="btn-save" id="button">
            <a class="btn btn-danger btn-lg" href="#">Guardar</a>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach($sliders as $slider)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-slider">
                            <div class="title-card">Orientación horizontal</div>
                            <img src="{{ $slider->imagen }}" alt="imagen{{ $slider->id_slider }}" width="100%" style="max-height: 300px">
                            <hr>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="title-card">Orientación vertical</div>
                                    <img src="/img/news-2-340x420.jpg" alt="imagen2" width="100%">
                                </div>
                                <div class="col-md-5 align-self-end" style="text-align: -webkit-right;">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch{{ $slider->id_slider }}" 
                                            @if($slider->status == 1) checked @endif onchange="cambiar()">
                                        <label class="custom-control-label" for="customSwitch{{ $slider->id_slider }}">Estado</label>
                                    </div>
                                    <a class="btn btn-danger" onclick="confirmar({{ $slider->id_slider }})"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
<script>
    document.getElementById('sliders').classList.add('active');
    function cambiar(){
        const button = document.getElementById('button');
        button.style.display = "block";
    }
    function confirmar($id){
        confirm("¿Realmente deseeas eliminar el registro?");
        /*if(confirmar){
            window.location.href='?cargar=eliminarEmpleados&id_empleado='+id_empleado;
            alert('Registro eliminado...');
        }else{
            window.location.href='?cargar=consultarEmpleados';
        }*/
    }
</script>
@endsection