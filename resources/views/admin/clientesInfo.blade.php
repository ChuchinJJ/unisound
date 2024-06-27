@extends('admin.container')
@section('contenido')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
          <div class="col-sm-6">
            <h1 class="m-0">Información del Cliente</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
        <div class="content-fluid">
            <div class="card">
                <div class="card-slider">
                    <div class="row">
                      <div class="mb-3 col-6">
                        <label for="correo" class="form-label">Email</label>
                        <input type="email" class="form-control" id="correo" value="{{$cliente->email}}" readonly>
                      </div>
                      <div class="mb-3 col-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" value="{{$cliente->nombre}} {{$cliente->apellidos}}" readonly>
                      </div>
                    </div>
                    <div class="row">
                      <div class="mb-3 col-6">
                        <label for="tel" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="tel" value="{{$cliente->telefono}}" readonly>
                      </div>
                      <div class="mb-3 col-6">
                        <label for="rfc" class="form-label">RFC</label>
                        <input type="text" class="form-control" id="rfc" value="{{$cliente->rfc}}" readonly>
                      </div>
                    </div>
                    <div class="row">
                      <div class="mb-3 col-6">
                        <label for="dir" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="dir" value="{{$cliente->calle}}, {{ $cliente->ciudad }}, {{ $cliente->estado }}, {{ $cliente->pais }}, , {{ $cliente->cp }}" readonly>
                      </div>
                      <div class="mb-3 col-6">
                        <label for="fnac" class="form-label">Fecha de Nacimiento</label>
                        <input type="text" class="form-control" id="fnac" value="{{$cliente->fecha_nac}}" readonly>
                      </div>
                    </div>
                </div> 
            </div> 

        </div>
    </div>  
</div>

@endsection