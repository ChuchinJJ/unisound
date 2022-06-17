@extends('admin.container')
@section('contenido')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
          <div class="col-sm-6">
            <h1 class="m-0">Clientes</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
        <div class="content-fluid">
            <div class="card">
                <div class="card-slider">
                        <div class="search-product me-2 mb-2">
                            <div class="search">
                                <a class="icon" ><i class="fa fa-search"></i></a>
                                <input class="form-control" type="search" id="buscador" placeholder="Buscar..." name="nombre"/>
                            </div>
                        </div>
            
                    <div class="container-table">
                        <table style="border-right: 3px solid white; border-left: 3px solid white;" class="table" width="100%">
                            <thead>
                                <tr>
                                    
                                    <th>Email</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Fecha Nac.</th>
                                    <th>Pais</th>
                                    <th>Estado</th>
                                    <th>Ciudad</th>
                                    <th>Calle</th>
                                    <th>Historial</th>
                                </tr>
                            </thead>

                            <tbody  id="tablita">
                            @foreach($clientes as $cliente)

                                <tr>
                                <td data-label="Email">{{ $cliente->email }}</td>
                                <td data-label="Nombre">{{ $cliente->nombre }}</td>
                                <td data-label="Telefono">{{$cliente->telefono}} </td>
                                <td data-label="Fecha-Nac">{{$cliente->fecha_nac}} </td>
                                
                                <td data-label="Pais">{{ $cliente->pais }} </td>
                                <td data-label="Estado">{{ $cliente->estado }} </td>
                                <td data-label="Ciudad"> {{ $cliente->ciudad }} </td>
                                <td data-label="Calle">{{$cliente->calle}} </td>
                                <td data-label="Historial"><a href="/admin/clientes/{{ $cliente->email }}/ventas" class="button button-cliente3" style="padding:2px 16px;"> Ver</a></td>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div> 

        </div>
    </div>  
</div>

<script>
document.getElementById('clientes').classList.add('active');
$(document).ready(function(){
  $("#buscador").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tablita tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@endsection