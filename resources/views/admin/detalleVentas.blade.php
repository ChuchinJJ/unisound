@extends('admin.container')
@section('contenido')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
          <div class="col-sm-6">
            <h1 class="m-0">Detalle de venta</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
        <div class="content-fluid">
            <div class="card">
                <div class="card-slider">
                    <h4>Cliente</h4>
                    <p>{{ $cliente->nombre." ".$cliente->apellidos }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
