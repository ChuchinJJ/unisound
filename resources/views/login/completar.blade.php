@extends('layouts.container')
@section('contenido')
<section>
    <div class="p-4 w-100 align-self-center fondo-login">
        <div class="row justify-content-center">
            <form class="card col-md-8 card-register" method="POST" action="{{ route('completar-registro') }}">
                <div class="title-register">
                    <h1>Completar registro</h1>
                </div>
                <input type="hidden" name="email" value="{{ $email }}"/>
                <input type="hidden" name="usuario" value="{{ $usuario }}"/>
                <input type="hidden" name="password" value="{{ $password }}"/>
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="name" class="form-label font-weight-bold letras" required>Nombre(s)</label>
                        <input style="font-size:15px;" id="name" name="nombre" type="text" class="form-control" required placeholder="Escriba su(s) nombre(s)">
                    </div>

                    <div class="col-md-6 mb-4 ">
                        <label for="subname" class="form-label font-weight-bold letras">Apellidos</label>
                        <input style="font-size:15px;" id="subname" name="apellidos" type="text" class="form-control" required placeholder="Escriba sus apellidos">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="rfc" class="form-label font-weight-bold letras">RFC</label>
                        <input style="font-size:15px;" id="rfc" name="rfc" type="text" class="form-control" required placeholder="Escriba su RFC">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="tel" class="form-label font-weight-bold letras">Teléfono</label>
                        <input style="font-size:15px;" id="tel" name="telefono" type="tel" class="form-control" required placeholder="Escriba su número de teléfono">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="nac" class="form-label font-weight-bold letras">Fecha de Nacimiento</label>
                        <input style="font-size:15px;" id="nac" name="fecha_nac" type="date" class="form-control" required>    
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="postal" class="form-label font-weight-bold letras">C. Postal</label>
                        <input style="font-size:15px;" id="postal" name="cp" type="text" class="form-control" required placeholder="Escriba su código postal">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="pais" class="form-label font-weight-bold letras">País</label>
                        <input style="font-size:15px;" id="pais" name="pais" type="text" class="form-control" required placeholder="Escriba su país">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="estado" class="form-label font-weight-bold letras">Estado</label>
                        <input style="font-size:15px;" id="estado" name="estado" type="text" class="form-control" required placeholder="Escriba su estado">
                    </div>

                    <div class="col-md-5 mb-4">
                        <label for="ciudad" class="form-label font-weight-bold letras">Ciudad</label>
                        <input style="font-size:15px;" id="ciudad" name="ciudad" type="text" class="form-control" required placeholder="Escriba su ciudad">
                    </div>

                    <div class="col-md-7 mb-5">
                        <label for="call" class="form-label font-weight-bold letras">Calle</label>
                        <input style="font-size:15px;" id="calle" name="calle" type="text" class="form-control" required placeholder="Escriba su dirección">
                    </div>
                    
                    <div class="col-md-12">
                        <button type="submit" class="btn d-grid col-4 mx-auto mb-4">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection