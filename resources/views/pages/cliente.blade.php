
@extends('layouts.container')
@section('contenido')

<div class="contenedor-cliente" id="contenedor">

        <!--Offcanvas para menu hamburguesa-->

        <div style="z-index:999999;" class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
                <button type="button" class="btn btn-warning " data-bs-dismiss="offcanvas" aria-label="Close">&times;</button>
            </div>
            <div class="offcanvas-body">
                <h5 style="font-size:30px;" class="font-weight-bold ml-4">Mi cuenta</h5> <hr style="color:#cccfd3;">
                <div class="menu-cliente" id="menuNavegacion">
                    <a href="#cuenta" class="d-block" onclick="mostrarPerfil();"><i class="fa fa-user mr-2 "></i>Perfil <br> <span>Aca veras todos los datos de tu perfil</span> <hr></a>
                    <a href="#seguridad" class="d-block" onclick="mostrarSeguridad();"><i class="fa fa-key mr-2"></i> Seguridad <br> <span>Actualiza tu información para estar mas seguro</span> <hr></a> 
                    <a href="#compras" class="d-block" onclick="mostrarCompras();" ><i class="fa fa-shopping-bag mr-2"></i>Mis Compras <br> <span>Aca podras ver todas las compras realizadas</span> <hr></a>
                </div>
                
            </div>
        </div>

    <div class="cliente-izquierda">
        <h5 class="titulo-cliente">Perfil</h5>
        <div class="menu-cliente" id="menuNavegacion">
            <a href="#" class="d-block" onclick="mostrarPerfil();"><i class="fa fa-user mr-2 "></i>Perfil <br> <span>Aca veras todos los datos de tu perfil</span> <hr></a>
            <a href="#" class="d-block" onclick="mostrarSeguridad();"><i class="fa fa-key mr-2"></i> Seguridad <br> <span>Actualiza tu información para estar mas seguro</span> <hr></a> 
            <a href="#" class="d-block" onclick="mostrarCompras();" ><i class="fa fa-shopping-bag mr-2"></i>Mis Compras <br> <span>Aca podras ver todas las compras realizadas</span> <hr></a>
            
        </div> 
    </div>
    <div class="cliente-derecha">
        <section id="cuenta" @if(old('filtro') || count($errors) > 0) style="display: none" @endif>
            
            <!--Menu Hamburguesa-->
            <div class="cliente-block">
                <i class="fa fa-bars icono-cliente ml-4" data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvas"></i>
                <h5 class="titulo-cliente">Perfil</h5>
            </div>

            <h5 class="titulo-cliente2">Cuenta</h5>
            <div id="perfil" class="menu-derecha mb-4">
                <a>Perfil</a> <br>
                <span>La siguiente información se muestra públicamente, ¡tenga cuidado!</span>
            </div>
            <div  class="row justify-content-center">
                <form action="cliente/update" method="post">
                    @csrf
                    <div  class="row">
                        <div class="col-md-6 mb-4">
                            <label class="form-label font-weight-bold letras" id="basic-addon3">Correo</label>
                            <input style="font-size:14px;" type="text" class="form-control input-cliente" id="basic-url" aria-describedby="basic-addon3" value="{{$usuario->email}}" name="email" readonly required>
                        </div>
                        <div class="col-md-5 mb-5">
                            <label class="form-label font-weight-bold letras" id="basic-addon3">Usuario</label>
                            <input style="font-size:14px;"   type="text" class="form-control input-cliente" id="basic-url" aria-describedby="basic-addon3" value="{{$usuario->usuario}}" readonly>
                        </div>
                        <hr class="mb-2"/>

                        <div class="menu-derecha2 mb-4">
                            <a>Información Personal</a> <br>
                            <span>Detalles de Comunicación en caso de que queramos conectar con usted. Estos se mantendran en privado.</span>
                        </div>
                        <div class="col-md-5 mb-4 ">
                                <label for="subname" class="form-label font-weight-bold letras" required>Nombre</label>
                                <input style="font-size:15px;" id="subname" name="nombre" type="text" class="form-control input-cliente "  required placeholder="Escribe tu nombre" value="{{old('nombre',$cliente->nombre)}}">
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="rfc" class="form-label font-weight-bold letras">Apellidos</label>
                            <input style="font-size:15px;" id="apellidos" name="apellidos" type="text" class="form-control input-cliente" required  placeholder="Escribe tus apellidos" value="{{old('apellidos',$cliente->apellidos)}}">
                        </div>
                        <div class="col-md-4 mb-4 ">
                                <label for="subname" class="form-label font-weight-bold letras" required>RFC</label>
                                <input style="font-size:15px;" id="subname" name="rfc" type="text" class="form-control input-cliente"  placeholder="Escribe tu RFC:" value="{{old('rfc', $cliente->rfc)}}">
                        </div>
                        <div class="col-md-4 mb-4">
                            <label for="rfc" class="form-label font-weight-bold letras">Teléfono</label>
                            <input style="font-size:15px;" id="tel" name="telefono" type="tel" class="form-control input-cliente"  placeholder="Numero de telefono a 10 digitos: Ejemplo (962 103 98 65)" value="{{old('telefono', $cliente->telefono)}}">
                        </div>
                        <div class="col-md-3 mb-4 ">
                                <label for="subname" class="form-label font-weight-bold letras" required>Fecha de Nacimiento</label>
                                <input style="font-size:15px;" id="subname" name="fechaNac" type="date" class="form-control input-cliente"  placeholder="Escribe tu fecha de nacimiento" value="{{old('fecha_nac', $cliente->fecha_nac)}}">
                        </div>
                        <div class="col-md-4 mb-4 ">
                                <label for="subname" class="form-label font-weight-bold letras" required>C. Postal</label>
                                <input style="font-size:15px;" id="cp" name="cp" type="text" class="form-control input-cliente"  required placeholder="Escribe tu codigo postal" value="{{old('cp',$cliente->cp)}}">
                        </div>
                        <div class="col-md-4 mb-4">
                            <label for="rfc" class="form-label font-weight-bold letras">Pais</label>
                            <input style="font-size:15px;" id="pais" name="pais" type="text" class="form-control input-cliente"  placeholder="Escribe tu Pais de residencia" value="{{old('pais',$cliente->pais)}}">
                        </div>
                        <div class="col-md-3 mb-4 ">
                                <label for="subname" class="form-label font-weight-bold letras" required>Estado</label>
                                <input style="font-size:15px;" id="estado" name="estado" type="text" class="form-control input-cliente"  required placeholder="Estado de residencia actual" value="{{old('estado',$cliente->estado)}}">
                        </div>
                        <div class="col-md-5 mb-4">
                            <label for="rfc" class="form-label font-weight-bold letras">Ciudad</label>
                            <input style="font-size:15px;" id="ciudad" name="ciudad" type="text" class="form-control input-cliente"  placeholder="Ciudad de residencia actual" value="{{old('ciudad', $cliente->ciudad)}}">
                        </div>
                        <div class="col-md-6 mb-4 ">
                                <label for="subname" class="form-label font-weight-bold letras" required>Calle</label>
                                <input style="font-size:15px;" id="calle" name="calle" type="text" class="form-control input-cliente"  required placeholder="Escribe tu direcciòn" value="{{old('calle', $cliente->calle)}}">
                        </div>
                        <div style="display:flex; justify-content:space-between;" class="col-md-11 mb-4">
                            <button type="reset" class="button button-cliente mb-4">Cancelar</button>
                            <button type="submit" class="button button-cliente2 mb-4">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section id="seguridad" @if(count($errors)>0) style="display:block;" @endif>
            <!--Menu Hamburguesa-->
            <div class="cliente-block">
                <i class="fa fa-bars icono-cliente ml-4" data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvas"></i>
                <h5 class="titulo-movil">Seguridad</h5>
            </div>
            <div class="menu-derecha3 mb-4">
                <h5>Contraseñas</h5> <br>
                <span>En esta sección podras cambiar tus contraseñas.</span>
            </div>

            <form action="cliente/newPass" method="post" >
                @csrf
                <div class="row">
                    <div class="col-md-10 mb-4">
                        <label for="old_pass" class="form-label font-weight-bold letras" required>Contraseña Actual</label>
                        <input style="font-size:15px;" id="old_pass" name="old_pass" type="password" class="form-control input-cliente"  required placeholder="Escriba su contraseña actual" >
                    </div>
                    <div class="col-md-5">
                        <label for="password" class="form-label font-weight-bold letras" required>Nueva Contraseña</label>
                        <input style="font-size:15px;" id="password" name="password" type="password" class="form-control input-cliente"  required placeholder="Escriba su nueva contraseña">
                    </div>
                    <div class="col-md-5">
                        <label for="password_confirmation" class="form-label font-weight-bold letras" required>Confirmar nueva Contraseña</label>
                        <input style="font-size:15px;" id="password_confirmation" name="password_confirmation" type="password" class="form-control input-cliente mb-2" required placeholder="Confirme su nueva contraseña">
                    </div>
                    <span class="seguridad-span mb-4">8 caracteres mínimo. Debe incluir una Mayúscula, números, letras y caracteres especiales.</span>
                    <div style="display:flex; justify-content:space-between;" class="col-md-11">
                        <button type="reset" class="button button-cliente mb-4">Cancelar</button>
                        <button type="submit" class="button button-cliente2 mb-4">Guardar</button>
                    </div>
                </div>
            </form>
        </section>

        <section id="compras" @if(old('filtro')) style="display: block" @endif>
            <!--Menu Hamburguesa-->
            <div class="cliente-block">
                <i class="fa fa-bars icono-cliente ml-4" data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvas"></i>
                <h5 class="titulo-movil">Historial</h5>
            </div>
            <div class="menu-derecha4 mb-3">
                <h5>Mis Compras</h5> <br>
                <form action="" method="post" id="form">
                    @csrf
                    <div class="filter-select">
                        <div class="mb-2 count-cliente ">
                            <select class="select-cliente" name="filtro" id="filtro" onchange="enviar()">
                                <option value="all" @if(old('filtro') == "all") selected="selected" @endif>Todos</option>
                                <option value="30-" @if(old('filtro') == "30-") selected="selected" @endif>Últimos 30 dias</option>
                                <option value="30+" @if(old('filtro') == "30+") selected="selected" @endif>Más de un mes</option>
                                <option value="6+" @if(old('filtro') == "6+") selected="selected" @endif>Más de 6 meses</option>
                            </select>
                            <h6 class="mr-5" >{{ count($ventas) }} Compras</h6>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                @forelse($ventas as $venta)
                    <div class="card mb-5 m-4">
                        <div class="card-header card-cabecera cliente-espacio">
                            <h4 >Fecha Pedido: <br> 
                                @php
                                    setlocale(LC_TIME, "spanish");
                                    $fecha_str = str_replace("/", "-", $venta->fecha->format('Y-m-d H:i:s'));
                                    $newDate = date("d-m-Y", strtotime($fecha_str));
                                    $fecha = strftime("%d de %B de %Y", strtotime($newDate));
                                @endphp
                                {{ $fecha }}
                            </h4>
                            <h4>Total. <br> <Strong> ${{ number_format($venta->total, 2, ".", ",") }}</Strong> </h4>
                            
                            <h4>Enviar a: <br>{{ $cliente->nombre }}
                                <h4>Pedido N. °{{ $venta->id_venta }}</°> </h4>    
                            </h4>
                        </div>
                    
                        <div class="card-body">
                            @foreach($detalles as $detalle)
                                @if($detalle->id_venta == $venta->id_venta)
                                <div style="display:flex; justify-content: space-evenly" >
                                    <h6>{{ $detalle->producto }}</h6>
                                    <h6>{{ $detalle->cantidad }} Unidad</h6>
                                    <h6><b>Subtotal: </b>${{ number_format($detalle->precio, 2, ".", ",") }}</h6>
                                </div>
                                <hr>
                                @endif
                            @endforeach
                        </div>

                        <div class="p-4 cliente-espacio " >
                            <p class="badge bg-success text-wrap" style="font-size:15px;">{{ $venta->status }}</p>
                            <a href="cliente/{{ $venta->id_venta }}/detalleVenta" class="button button-cliente3" style="padding:8px 20px;">Ver compra</a>
                        </div>
                    </div>
                @empty
                    <p class="text-center m-4" style="font-size:20px;" >No ha realizado ninguna compra</p>
                @endforelse
            </div>
        </section>
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
        <button type="button" class="btna" onclick="cerrar()" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>
@endif

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
@endif

<script>

    function mostrarPerfil(){
        document.getElementById('seguridad').style.display = 'none';
        document.getElementById('compras').style.display = 'none';
        document.getElementById('cuenta').style.display = 'block';
        hiddenOffcanvas();
    }

    function mostrarSeguridad(){
        document.getElementById('seguridad').style.display = 'block';
        document.getElementById('compras').style.display = 'none';
        document.getElementById('cuenta').style.display = 'none';
        hiddenOffcanvas();
    }
    function mostrarCompras(){
        document.getElementById('seguridad').style.display = 'none';
        document.getElementById('cuenta').style.display = 'none';
        document.getElementById('compras').style.display = 'block';
        hiddenOffcanvas();
    }

    const hiddenOffcanvas = () => {
        var myOffcanvas = document.getElementById('offcanvas');
        var bsOffcanvas = new bootstrap.Offcanvas(myOffcanvas);
        bsOffcanvas.hide();
    }

	function cerrar(){
		var modal = document.getElementById("myModal");
		modal.style.display = "none";
	}

    function enviar(){
        document.getElementById('form').submit();
    }
</script>
@endsection