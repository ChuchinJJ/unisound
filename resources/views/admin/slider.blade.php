@extends('admin.container')
@section('contenido')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
          <div class="col-sm-6">
            <h1 class="m-0">Sliders</h1>
          </div>
          <div class="col-sm-6 btn-top">
            <a class="btn btn-danger btn-lg" href="/admin/addslider">Agregar <i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
    </div>

    @if(session()->has('success'))
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display:block; background-color: #00000085;" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModal">Atención</h5>
                </div>
                <div class="modal-body">
                {{ session('success') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="cerrar()" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function cerrar(){
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>
    @endif

    <section class="content">
       <!-- <form action="/admin/sliders" method="POST"> {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-lg btn-save btn-oculto" id="button">
                Guardar  <i class="fa fa-save"></i>
            </button> -->
            <div class="container-fluid">
                <div class="row gallery">
                    @foreach($sliders as $slider)
                    <div class="col-md-4 card-group" style="margin-bottom: 20px;">
                        <div class="card">
                            <div class="card-slider">
                                <div class="title-card">Orientación horizontal</div>
                                <a class="venobox" href="/storage/img/sliders/{{ $slider->imagen }}" data-gall="myGallery" title="Sliders">
                                    <img src="/storage/img/sliders/{{ $slider->imagen }}" alt="imagen{{ $slider->id_slider }}" width="100%" style="max-height: 300px">
                                </a>
                                <hr>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="title-card">Orientación vertical</div>
                                        <a class="venobox" href="/storage/img/sliders/{{ $slider->movil }}" data-gall="myGallery" title="Sliders">
                                            <img src="/storage/img/sliders/{{ $slider->movil }}" alt="imagen{{ $slider->movil }}" width="100%">
                                        </a>
                                    </div>
                                    <div class="col-md-5 align-self-end" style="text-align: -webkit-right;">
                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch{{ $slider->id_slider }}" onchange="cambiar({{ $slider->id_slider }},this.checked)" name="{{ $slider->id_slider }}"
                                                @if($slider->status == 1) checked @endif>
                                            <label class="custom-control-label" for="customSwitch{{ $slider->id_slider }}">Activo</label>
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
        <!-- </form> -->
    </section>
</div>
<script>
    document.getElementById('sliders').classList.add('active');
    function cambiar(id, checked){
        window.location.href='/admin/sliders/'+id+'/'+checked;
        /*const button = document.getElementById('button');
        button.style.display = "block";*/
    }

    function confirmar(id){
        var confirmar = confirm("¿Realmente deseeas eliminar el registro?");
        if(confirmar){
            window.location.href='/admin/sliders/'+id;
        }
    }
    
    $(document).ready(function(){
        $('.venobox').venobox({
            border     : '5px',
        numeratio  : true,
        infinigall : true,
        titleBackground: '#333',
        closeBackground: '#333',
        titleColor: '#fff',
        spinColor: '#fff',
        spinner: 'three-bounce',
        numerationPosition: 'bottom'
        }); 
    });
</script>
@endsection