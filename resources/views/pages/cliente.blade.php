
@extends('layouts.container')
@section('contenido')

<div class="contenedor-cliente" id="contenedor">

    <!--Offcanvas para menu hamburguesa-->
    <div style="z-index:999999;" class="offcanvas offcanvas-start offcanvas-fondo" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
            <button type="button" class="btn btn-warning " data-bs-dismiss="offcanvas" aria-label="Close">&times;</button>
        </div>
        <div class="offcanvas-body">
            <h5 style="font-size:30px;" class="font-weight-bold ml-4">Mi cuenta</h5> <hr style="color:#cccfd3;">
            <div class="menu-cliente" id="menuNavegacion">
                <a href="?seccion=perfil" class="d-block">
                    <i class="fa fa-user mr-2 "></i>Perfil <br> 
                    <span>Gestiona los datos de tu perfil</span> <hr>
                </a>
                <a href="?seccion=seguridad" class="d-block">
                    <i class="fa fa-key mr-2"></i> Seguridad <br> 
                    <span>Actualiza tu contraseña para mayor seguridad</span> <hr>
                </a> 
                <a href="?seccion=compras" class="d-block">
                    <i class="fa fa-shopping-bag mr-2"></i>Mis Compras <br>
                    <span>Accede a tu historial de compras</span> <hr>
                </a>
            </div>
            
        </div>
    </div>

    <div class="cliente-izquierda">
        <h5 class="titulo-cliente">Mi cuenta</h5>
        <div class="menu-cliente" id="menuNavegacion">
            <a href="?seccion=perfil" class="d-block @if(!isset($_GET['seccion']) || (isset($_GET['seccion']) && $_GET['seccion'] == 'perfil')) active @endif" id="cuenta-link">
                <i class="fa fa-user mr-2 "></i>Perfil <br> 
                <span>Gestiona los datos de tu perfil</span> <hr>
            </a>
            <a href="?seccion=seguridad" class="d-block @if(isset($_GET['seccion']) && $_GET['seccion'] == 'seguridad') active @endif" id="seguridad-link">
                <i class="fa fa-key mr-2"></i> Seguridad <br> 
                <span>Actualiza tu contraseña para mayor seguridad</span> <hr>
            </a> 
            <a href="?seccion=compras" class="d-block @if(isset($_GET['seccion']) && $_GET['seccion'] == 'compras') active @endif" id="compras-link">
                <i class="fa fa-shopping-bag mr-2"></i>Mis Compras <br>
                <span>Accede a tu historial de compras</span> <hr>
            </a>
        </div> 
    </div>
    <div class="cliente-derecha">
        <section id="cuenta" @if(isset($_GET['seccion']) && $_GET['seccion'] != 'perfil')) style="display: none" @endif>
            
            <!--Menu Hamburguesa-->
            <div class="cliente-block">
                <i class="fa fa-bars icono-cliente ml-4" data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvas"></i>
                <h5 class="titulo-movil">Perfil</h5>
            </div>
            <h6 class="titulo-cliente2">Datos de cuenta</h6>
            <div class="card card-cliente m-4 p-4">
                <div id="perfil" class="menu-derecha mb-4">
                    <a>Perfil</a> <br>
                    <span>La siguiente información se muestra públicamente, ¡tenga cuidado!</span>
                </div>
                <div  class="row justify-content-center">
                    <div  class="row">
                        <div class="col-md-6 mb-4">
                            <label class="form-label font-weight-bold letras" id="basic-addon3">Correo</label>
                            <input style="font-size:14px;" type="text" class="form-control input-cliente" id="basic-url" aria-describedby="basic-addon3" value="{{$usuario->email}}" name="email" readonly required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label font-weight-bold letras" id="basic-addon3">Usuario</label>
                            <input style="font-size:14px;"   type="text" class="form-control input-cliente" id="basic-url" aria-describedby="basic-addon3" value="{{$usuario->usuario}}" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-cliente m-4 p-4">
                <div  class="row justify-content-center">
                    <form action="cliente/update" method="post">
                        @csrf
                        <div  class="row">
                            <div class="menu-derecha2 mb-4">
                                <a>Información Personal</a> <br>
                                <span>Detalles de Comunicación en caso de que queramos conectar con usted. Estos se mantendrán en privado.</span>
                            </div>
                            <input type="hidden" value="{{$usuario->email}}" name="email">
                            <div class="col-md-6 mb-4">
                                <label for="nombre" class="form-label font-weight-bold letras" required>Nombre</label>
                                <input style="font-size:15px;" id="nombre" name="nombre" type="text" class="form-control input-cliente" required placeholder="Escribe tu nombre" value="{{old('nombre',$cliente->nombre)}}">
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="apellidos" class="form-label font-weight-bold letras">Apellidos</label>
                                <input style="font-size:15px;" id="apellidos" name="apellidos" type="text" class="form-control input-cliente" required  placeholder="Escribe tus apellidos" value="{{old('apellidos',$cliente->apellidos)}}">
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <label for="rfc" class="form-label font-weight-bold letras" required>RFC</label>
                                <input style="font-size:15px;" id="rfc" name="rfc" type="text" class="form-control input-cliente"  placeholder="Escribe tu RFC:" value="{{old('rfc', $cliente->rfc)}}">
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="tel" class="form-label font-weight-bold letras">Teléfono</label>
                                <input style="font-size:15px;" id="tel" name="telefono" type="tel" class="form-control input-cliente"  placeholder="Numero de telefono a 10 digitos: Ejemplo (962 103 98 65)" value="{{old('telefono', $cliente->telefono)}}">
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <label for="nac" class="form-label font-weight-bold letras" required>Fecha de Nacimiento</label>
                                <input style="font-size:15px;" id="nac" name="fechaNac" type="date" class="form-control input-cliente"  placeholder="Escribe tu fecha de nacimiento" value="{{old('fecha_nac', $cliente->fecha_nac)}}">
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="cp" class="form-label font-weight-bold letras" required>C. Postal</label>
                                <input style="font-size:15px;" id="cp" name="cp" type="text" class="form-control input-cliente"  required placeholder="Escribe tu codigo postal" value="{{old('cp',$cliente->cp)}}">
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="pais" class="form-label font-weight-bold letras">Pais</label>
                                <input style="font-size:15px;" id="pais" name="pais" type="text" class="form-control input-cliente"  placeholder="Escribe tu Pais de residencia" value="{{old('pais',$cliente->pais)}}">
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="estado" class="form-label font-weight-bold letras" required>Estado</label>
                                <input style="font-size:15px;" id="estado" name="estado" type="text" class="form-control input-cliente"  required placeholder="Estado de residencia actual" value="{{old('estado',$cliente->estado)}}">
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="ciudad" class="form-label font-weight-bold letras">Ciudad</label>
                                <input style="font-size:15px;" id="ciudad" name="ciudad" type="text" class="form-control input-cliente"  placeholder="Ciudad de residencia actual" value="{{old('ciudad', $cliente->ciudad)}}">
                            </div>
                            <div class="col-md-6 mb-4 ">
                                <label for="calle" class="form-label font-weight-bold letras" required>Calle</label>
                                <input style="font-size:15px;" id="calle" name="calle" type="text" class="form-control input-cliente"  required placeholder="Escribe tu direcciòn" value="{{old('calle', $cliente->calle)}}">
                            </div>
                            <div style="display:flex; justify-content:space-between;" class="col-md-12">
                                <button type="reset" class="button button-cliente mb-4">Cancelar</button>
                                <button type="submit" class="button button-cliente2 mb-4">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section id="seguridad" @if(isset($_GET['seccion']) && $_GET['seccion'] == 'seguridad') style="display:block;" @endif>
            <!--Menu Hamburguesa-->
            <div class="cliente-block">
                <i class="fa fa-bars icono-cliente ml-4" data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvas"></i>
                <h5 class="titulo-movil">Seguridad</h5>
            </div>
            <div class="menu-derecha2 mb-4">
                <h6 class="titulo-cliente2" style="margin-bottom: 2px;">Contraseñas</h6>
                <span class="subtitulo-cliente2">En esta sección podras cambiar tus contraseñas.</span>
            </div>
            <div class="card card-cliente m-4 p-4">
                <form action="cliente/newPass" method="post" >
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label for="old_pass" class="form-label font-weight-bold letras" required>Contraseña Actual</label>
                            <input style="font-size:15px;" id="old_pass" name="old_pass" type="password" class="form-control input-cliente"  required placeholder="Escriba su contraseña actual" >
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label font-weight-bold letras" required>Nueva Contraseña</label>
                            <input style="font-size:15px;" id="password" name="password" type="password" class="form-control input-cliente input-margen"  required placeholder="Escriba su nueva contraseña">
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label font-weight-bold letras" required>Confirmar nueva Contraseña</label>
                            <input style="font-size:15px;" id="password_confirmation" name="password_confirmation" type="password" class="form-control input-cliente mb-2" required placeholder="Confirme su nueva contraseña">
                        </div>
                        <span class="seguridad-span mb-4">8 caracteres mínimo. Debe incluir una Mayúscula, números, letras y caracteres especiales.</span>
                        <div style="display:flex; justify-content:space-between;" class="col-md-12">
                            <button type="reset" class="button button-cliente mb-4">Cancelar</button>
                            <button type="submit" class="button button-cliente2 mb-4">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section id="compras" @if(isset($_GET['seccion']) && $_GET['seccion'] == 'compras') style="display: block" @endif>
            <!--Menu Hamburguesa-->
            <div class="cliente-block">
                <i class="fa fa-bars icono-cliente ml-4" data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvas"></i>
                <h5 class="titulo-movil">Historial</h5>
            </div>
            <div class="menu-derecha4 mb-3">
                <h6 class="titulo-cliente2 mr-4">Mis Compras</h6>
                <form action="" method="post" id="form" class="m-4">
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
                    <div class="card card-cliente mb-5 m-4">
                        <div class="card-cabecera">
                            <h4>
                                @php
                                    setlocale(LC_TIME, "spanish");
                                    $fecha_str = str_replace("/", "-", $venta->fecha->format('Y-m-d H:i:s'));
                                    $newDate = date("d-m-Y", strtotime($fecha_str));
                                    $fecha = strftime("%d de %B de %Y", strtotime($newDate));
                                    $first = true;
                                @endphp
                                {{ $fecha }}
                            </h4>
                            <!--<h4 class="grid-2">Total:<br><Strong> ${{ number_format($venta->total, 2, ".", ",") }}</Strong> </h4>
                            <h4 class="grid-3">Enviar a: <br>{{ $cliente->nombre }} </h4> -->
                            <h4>Pedido # {{ $venta->id_venta }}</°> </h4> 
                        </div>
                    
                        <div class="card-body p-3">
                            <div class="row" style="align-items: center;">
                                <div class="col-md-9">
                                @foreach($detalles as $detalle)
                                    @if($detalle->id_venta == $venta->id_venta)
                                        @if(!$first)
                                            <hr>
                                        @else
                                            @php $first = false; @endphp
                                        @endif
                                        <div class="row">
                                            @foreach($colores as $color)
                                                @if($color->id_color == $detalle->id_color)
                                                    @php $producto = $productos->firstWhere('id_producto', $color->id_producto); @endphp
                                                    <a href="/product/{{ $producto->id_producto}}" class="col-md-2 mb-2">
                                                        <img src="/storage/img/products/{{ $producto->imagen1 }}" alt="" style="width: 100%"/>
                                                    </a>
                                                @endif
                                            @endforeach
                                            <div class="col-md-10">
                                                <h6><a href="/product/{{ $producto->id_producto}}">{{ $detalle->producto }}</a></h6>
                                                <h6>{{ $detalle->cantidad }} Unidad</h6>
                                                <h6>${{ number_format($detalle->precio, 2, ".", ",") }}</h6>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                </div>
                                <div class="col-md-3 seccion-total">
                                    <h4><b>Total: </b>${{ number_format($venta->total, 2, ".", ",") }}</h4>
                                    <h4><b>Pagado: </b>@if($venta->pagado == 1) Si @else No @endif</h4>
                                    <p class="bg-status bg-{{ str_replace(' ', '',$venta->status) }} text-wrap" style="font-size:15px; padding: 0.5rem 0.5rem;">{{ $venta->status }}</p>
                               </div>
                            </div>
                        </div>
                        <div class="p-4 card-foot" style="padding-top: 0px !important">
                            <a href="cliente/{{ $venta->id_venta }}/detalleVenta" class="button button-cliente3">Ver compra</a>
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
    /*var cuenta = document.getElementById('cuenta');
    var seguridad = document.getElementById('seguridad');
    var compras = document.getElementById('compras');
    var cuentaLink = document.getElementById('cuenta-link');
    var seguridadLink = document.getElementById('seguridad-link');
    var comprasLink = document.getElementById('compras-link');

    function mostrarPerfil(){
        seguridad.style.display = 'none';
        seguridadLink.classList.remove('active');
        compras.style.display = 'none';
        comprasLink.classList.remove('active');
        cuenta.style.display = 'block';
        cuentaLink.classList.add('active');
        hiddenOffcanvas();
    }

    function mostrarSeguridad(){
        seguridad.style.display = 'block';
        seguridadLink.classList.add('active');
        compras.style.display = 'none';
        comprasLink.classList.remove('active');
        cuenta.style.display = 'none';
        cuentaLink.classList.remove('active');
        hiddenOffcanvas();
    }
    function mostrarCompras(){
        seguridad.style.display = 'none';
        seguridadLink.classList.remove('active');
        compras.style.display = 'block';
        comprasLink.classList.add('active');
        cuenta.style.display = 'none';
        cuentaLink.classList.remove('active');
        hiddenOffcanvas();
    }*/

    const hiddenOffcanvas = () => {
        var myOffcanvas = document.getElementById('offcanvas');
        var bsOffcanvas = new bootstrap.Offcanvas(myOffcanvas);
        bsOffcanvas.hide();
        myOffcanvas.classList.remove('show');
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