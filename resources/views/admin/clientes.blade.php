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
                  <div class="row">
                    <div class="col-10">
                      <div class="search-product me-2 mb-2">
                        <div class="search">
                            <a class="icon" ><i class="fa fa-search"></i></a>
                            <input class="form-control" type="search" id="buscador" placeholder="Buscar..." name="nombre"/>
                        </div>
                      </div>
                    </div>
                    <div class="col-2">
                      <a href="/admin/clientesexport" class="button button-cliente3" style="padding:2px 16px;" title="Información"><i class="fas fa-file-excel"></i> Excel</a>
                    </div>
                  </div>
            
                    <div class="container-table">
                        <table style="border-right: 3px solid white; border-left: 3px solid white;" class="table" width="100%">
                            <thead>
                                <tr>
                                    
                                    <th>Email</th>
                                    <th>Nombre</th>
                                    <th>Teléfono</th>
                                    <th>RFC</th>
                                    <th>Dirección</th>
                                    <th>Detalles</th>
                                </tr>
                            </thead>

                            <tbody  id="tablita">
                            @foreach($clientes as $cliente)

                                <tr>
                                <td data-label="Email">{{ $cliente->email }}</td>
                                <td data-label="Nombre">{{ $cliente->nombre }} {{ $cliente->apellidos }}</td>
                                <td data-label="Telefono">{{$cliente->telefono}} </td>
                                <td data-label="RFC">{{$cliente->rfc}} </td>
                                <td data-label="Direccion">{{$cliente->calle}}, {{ $cliente->ciudad }}, {{ $cliente->estado }}, {{ $cliente->pais }}, , {{ $cliente->cp }}</td>
                                <td data-label="Detalles">
                                  <a href="/admin/clientes/{{ $cliente->email }}" class="button button-cliente3" style="padding:2px 16px;" title="Información"><i class="fas fa-info"></i></a>
                                  <a href="/admin/clientes/{{ $cliente->email }}/ventas" class="button button-cliente3" style="padding:2px 16px;" title="Pedidos"><i class="fas fa-clipboard-list"></i></a>
                                </td>

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