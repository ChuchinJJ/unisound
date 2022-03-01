@extends('admin.container')
@section('contenido')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
          <div class="col-sm-6">
            <h1 class="m-0">Productos</h1>
          </div>
          <div class="col-sm-6 btn-top">
            <a class="btn btn-danger btn-lg" href="/admin/addproducto">Agregar <i class="fa fa-plus"></i></a>
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

    <div class="content">
        <div class="content-fluid">
            <div class="card">
                <div class="card-slider">
                    <div clss="input-group m-2">
                        <form>
                            <div class="container-1 ">
                                <span class="icon"><i class="fa fa-search"></i></span>
                                <input class="form-control me-2 " type="search" id="search" placeholder="Buscar..." />
                            </div>
                            <select class="select-admin">
                                <option value="menu_order" selected='selected'>Estado</option>
                                <option value="popularity">Activo</option>
                                <option value="rating">Eliminados</option>
                            </select>
                        
                            <select class="select-admin">
                                <option value="menu_order" selected='selected'>Ordenar</option>
                                <option value="popularity">Mas populares</option>
                                <option value="rating">Por precios</option>
                            </select>
                        </form>
                    </div>
            
                    <div class="container-table">
                        <table style="border-right: 3px solid white; border-left: 3px solid white;" class="table" width="100%">
                            <thead>
                                <tr>
                                    <th colspan="2">ID</th>
                                    <th>Nombre</th>
                                    <th>Categoría</th>
                                    <th>Valoración</th>
                                    <th>Activo</th>
                                    <th>Detalles</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td data-label=""><img src="/img/1.png" width="40%" alt=""></td>
                                    <td data-label="Id">1</td>
                                    <td data-label="Nombre">Guitarra Electroacustica</td>
                                    <td dara-label="Categoria">De cuerda</td>
                                    <td data-label="Rating"><i class="fa fa-grin-stars"></i></td>
                                    <td data-label="Activo"><svg style="width:13px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M376.6 427.5c11.31 13.58 9.484 33.75-4.094 45.06c-5.984 4.984-13.25 7.422-20.47 7.422c-9.172 0-18.27-3.922-24.59-11.52L192 305.1l-135.4 162.5c-6.328 7.594-15.42 11.52-24.59 11.52c-7.219 0-14.48-2.438-20.47-7.422c-13.58-11.31-15.41-31.48-4.094-45.06l142.9-171.5L7.422 84.5C-3.891 70.92-2.063 50.75 11.52 39.44c13.56-11.34 33.73-9.516 45.06 4.094L192 206l135.4-162.5c11.3-13.58 31.48-15.42 45.06-4.094c13.58 11.31 15.41 31.48 4.094 45.06l-142.9 171.5L376.6 427.5z"/></svg></td>
                                    <td data-label="Detalles"><i id="icono" class="fa fa-solid fa-angle-down icono-arrow" role="button" data-bs-toggle="collapse" href="#collapse1" aria-controls="collapse1" aria-expanded="false"></i></td>
                                </tr>
                                <tr>
                                    <td class="collapse " id="collapse1" colspan="7">
                                        <div class="">
                                            <p>Aqui van los detalles de todos los productos</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td data-label=""><img src="/img/2.png" width="40%" alt=""></td>
                                    <td data-label="Id">2</td>
                                    <td data-label="Nombre">Guitarra Electroacustica</td>
                                    <td dara-label="Categoria">De cuerda</td>
                                    <td data-label="Rating"><i class="fa fa-sad-cry"></i></td>
                                    <td data-label="Activo"><i style="color:#31cf31b5;" class="fa fa-check"></i></td>
                                    <td data-label="Detalles"><i id="icono2" class="fa fa-solid fa-angle-down icono-arrow" role="button" data-bs-toggle="collapse" href="#collapse2" aria-controls="collapse2" aria-expanded="false"></i></td>
                                </tr>
                                <tr>
                                    <td class="collapse " id="collapse2" colspan="7">
                                        <div class="">
                                            <p>Aqui van los detalles de todos los productos</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var icon = document.getElementById('icono'),
        icon2 = document.getElementById('icono2'),
        contador=0;

    function cambio() {
        if(contador==0){
            icon.classList.add('fa-angle-up');
            icon.classList.remove('fa-angle-down');
            contador=1;
        }
        else{
            icon.classList.add('fa-angle-down');
            icon.classList.remove('fa-angle-up');
            contador=0;
        }
    }
    icon.addEventListener('click',cambio,true)
    document.getElementById('productos').classList.add('active');

    $('#collapse2').on('hidden.bs.collapse', function () {
        $('#icono2').addClass('fa-angle-down');
        $('#icono2').removeClass('fa-angle-up');
    });
    $('#collapse2').on('shown.bs.collapse', function () {
        $('#icono2').addClass('fa-angle-up');
        $('#icono2').removeClass('fa-angle-down');
    });
</script>
@endsection