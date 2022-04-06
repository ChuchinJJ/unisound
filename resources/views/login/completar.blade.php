@extends('layouts.container')
@section('contenido')
<section>
    <div class="p-4 w-100 align-self-center fondo-login">
        <div class="row justify-content-center">
            <form class="card col-md-7 card-register" method="POST" action="{{ route('completar-registro') }}">
                <div class="title-register">
                    <h1>Completar registro</h1>
                </div>
                <input type="hidden" name="email" value="{{ old('email') }}"/>
                <input type="hidden" name="name" value="{{ old('name') }}"/>
                <input type="hidden" name="pass" value="{{ old('password', old('pass')) }}"/>
                @csrf
                <div class="row">
                    <label class="require-title">Campos obligatorios</label>
                    <br>
                    <div class="col-md-6 mb-4">
                        <label for="name" class="form-label font-weight-bold letras require-label" required>Nombre(s)</label>
                        <input style="font-size:15px;" id="name" name="nombre" type="text" class="form-control" value="{{old('nombre')}}" required placeholder="Escriba su(s) nombre(s)">
                    </div>

                    <div class="col-md-6 mb-4 ">
                        <label for="subname" class="form-label font-weight-bold letras require-label" required>Apellidos</label>
                        <input style="font-size:15px;" id="subname" name="apellidos" type="text" class="form-control" value="{{old('apellidos')}}" required placeholder="Escriba sus apellidos">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="rfc" class="form-label font-weight-bold letras">RFC</label>
                        <input style="font-size:15px;" id="rfc" name="rfc" type="text" class="form-control" value="{{old('rfc')}}" placeholder="Escriba su RFC">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="tel" class="form-label font-weight-bold letras require-label">Teléfono</label>
                        <input style="font-size:15px;" id="tel" name="telefono" type="tel" class="form-control" value="{{old('telefono')}}" required placeholder="Escriba su número de teléfono">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="nac" class="form-label font-weight-bold letras">Fecha de Nacimiento</label>
                        <input style="font-size:15px;" id="nac" name="fecha_nac" type="date" class="form-control" value="{{old('fecha_nac')}}">    
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="postal" class="form-label font-weight-bold letras">C. Postal</label>
                        <input style="font-size:15px;" id="postal" name="cp" type="text" class="form-control" value="{{old('cp')}}" placeholder="Escriba su código postal">
                    </div>

                    <livewire:change-countries />

                    <div class="col-md-5 mb-4">
                        <label for="ciudad" class="form-label font-weight-bold letras require-label">Ciudad</label>
                        <input style="font-size:15px;" id="ciudad" name="ciudad" type="text" class="form-control" value="{{old('ciudad')}}" required placeholder="Escriba su ciudad">
                    </div>

                    <div class="col-md-7 mb-5">
                        <label for="call" class="form-label font-weight-bold letras require-label">Calle</label>
                        <input style="font-size:15px;" id="calle" name="calle" type="text" class="form-control" value="{{old('calle')}}" required placeholder="Escriba su dirección">
                    </div>
                    
                    <div class="col-md-12">
                        <button type="submit" class="btn d-grid col-4 mx-auto mb-4">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if (count($errors) > 0)
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display:block; background-color: #00000085;" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModal">Error</h5>
                </div>
                <div class="modal-body">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btna" onclick="cerrar()" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function cerrar(){
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
        }
        $(document).ready(function() {
            $.ajax({
                url: 'https://www.universal-tutorial.com/api/getaccesstoken',
                method: 'GET',
                headers: {
                    "Accept": "application/json",
                    "api-token": "IB9ke9yDbFFXfEUXAl0kpE04_XNsq2X-fMQkc1LphMge4ZkFClRDhMdlB4QRh7TWysA",
                    "user-email": "jonamorales1801@gmail.com"
                },
                success: function (data) {
                    if(data.auth_token){
                        var auth_token = data.auth_token;
                        $.ajax({
                            url: 'https://www.universal-tutorial.com/api/countries/',
                            method: 'GET',
                            headers: {
                                "Authorization": "Bearer " + auth_token,
                                "Accept": "application/json"
                            },
                            success: function (data) {
                                var countries = data;
                                var comboCountries = "<option value=''>Seleccionar</option>";
                                countries.forEach(element => {
                                    comboCountries += '<option value="' + element['country_name'] + '">' + element['country_name']+'</option>';
                                });

                                $("#pais").html(comboCountries);

                                // State list

                                $("#pais").on("change", function(){
                                    var country = this.value;
                                    $.ajax({
                                        url: 'https://www.universal-tutorial.com/api/states/' + country,
                                        method: 'GET',
                                        headers: {
                                            "Authorization": "Bearer " + auth_token,
                                            "Accept": "application/json"
                                        },
                                        success: function (data) {
                                            var states = data;
                                            var comboStates = "<option value=''>Seleccionar</option>";
                                            states.forEach(element => {
                                                comboStates += '<option value="' + element['state_name'] + '">' + element['state_name'] + '</option>';
                                            });
                                            $("#estado").html(comboStates);

                                            if (thisClass.stateValue) { $("#estado").val(thisClass.stateValue).trigger("change"); }

                                        },
                                        error: function (e) {
                                            console.log("Error al obtener countries: " + e);
                                        }
                                    });

                                });

                                if (thisClass.countryValue) { $("#pais").val(thisClass.countryValue).trigger("change"); }

                            },
                            error: function (e) {
                                console.log("Error al obtener countries: " + e);
                            }
                        });

                    }
                },
                error: function (e) {
                    console.log("Error al obtener countries: " + e);
                }
            });
        });

    </script>
    @endif
</section>
@endsection