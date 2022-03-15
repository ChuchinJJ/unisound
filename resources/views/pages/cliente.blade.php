
@extends('layouts.container')
@section('contenido')

<div class="contenedor-cliente" id="contenedor">

        <!--Offcanvas para menu hamburguesa-->

        <div style="z-index:999999;" class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h5 style="font-size:30px;" class="font-weight-bold ml-4">Mi cuenta</h5> <hr style="color:#cccfd3;">
                <div class="menu-cliente" id="menuNavegacion">
                    <a href="#cuenta" class="d-block" onclick="mostrarPerfil();"><i class="fa fa-user mr-2 "></i>Perfil <br> <span>Aca veras todos los datos de tu perfil</span> <hr></a>
                    <a href="#seguridad" class="d-block" onclick="mostrarSeguridad();"><i class="fa fa-key mr-2"></i> Seguridad <br> <span>Actualiza tu información para estar mas seguro</span> <hr></a> 
                    <a href="#" class="d-block"><i class="fa fa-shopping-bag mr-2"></i>Mis Compras <br> <span>Aca podras ver todas las compras realizadas</span> <hr></a>
                </div>
                
            </div>
        </div>

    <div class="cliente-izquierda">
        <h5 class="titulo-cliente">Perfil</h5>
        <div class="menu-cliente" id="menuNavegacion">
            <a href="#" class="d-block" onclick="mostrarPerfil();"><i class="fa fa-user mr-2 "></i>Perfil <br> <span>Aca veras todos los datos de tu perfil</span> <hr></a>
            <a href="#" class="d-block" onclick="mostrarSeguridad();"><i class="fa fa-key mr-2"></i> Seguridad <br> <span>Actualiza tu información para estar mas seguro</span> <hr></a> 
            <a href="#" class="d-block"><i class="fa fa-shopping-bag mr-2"></i>Mis Compras <br> <span>Aca podras ver todas las compras realizadas</span> <hr></a>
            
        </div> 
    </div>
    <div class="cliente-derecha">
        <section id="cuenta">
            
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
                <div  class="row">

                    <div class="col-md-6 mb-4">
                        <label class="form-label font-weight-bold letras" id="basic-addon3">Correo</label>
                        <input style="font-size:14px;"   type="text" class="form-control input-cliente" id="basic-url" aria-describedby="basic-addon3" placeholder="jonamorales1801@gmail.com" required>
                    </div>
                    <div class="col-md-5 mb-5">
                        <label class="form-label font-weight-bold letras" id="basic-addon3">Usuario</label>
                        <input style="font-size:14px;"   type="text" class="form-control input-cliente" id="basic-url" aria-describedby="basic-addon3" placeholder="Jona-180199">
                    </div>
                    <hr class="mb-2"/>

                    <div class="menu-derecha2 mb-4">
                        <a>Información Personal</a> <br>
                        <span>Detalles de Comunicación en caso de que queramos conectar con usted. Estos se mantendran en privado.</span>
                    </div>
                    <div class="col-md-5 mb-4 ">
                            <label for="subname" class="form-label font-weight-bold letras" required>Nombre</label>
                            <input style="font-size:15px;" id="subname" name="nombre" type="text" class="form-control input-cliente "  required placeholder="Jonathan">
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="rfc" class="form-label font-weight-bold letras">Apellidos</label>
                        <input style="font-size:15px;" id="apellidos" name="apellidos" type="text" class="form-control input-cliente"  placeholder="Morales Gonzalez">
                    </div>
                    <div class="col-md-4 mb-4 ">
                            <label for="subname" class="form-label font-weight-bold letras" required>RFC</label>
                            <input style="font-size:15px;" id="subname" name="rfc" type="text" class="form-control input-cliente"  required placeholder="MOGJ1801199HCS">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="rfc" class="form-label font-weight-bold letras">Teléfono</label>
                        <input style="font-size:15px;" id="tel" name="telefono" type="tel" class="form-control input-cliente"  placeholder="962 103 98 65">
                    </div>
                    <div class="col-md-3 mb-4 ">
                            <label for="subname" class="form-label font-weight-bold letras" required>Fecha de Nacimiento</label>
                            <input style="font-size:15px;"  id="subname" name="fechaNac" type="date" class="form-control input-cliente"  required placeholder="18/01/1999">
                    </div>
                    <div class="col-md-4 mb-4 ">
                            <label for="subname" class="form-label font-weight-bold letras" required>C. Postal</label>
                            <input style="font-size:15px;" id="cp" name="cp" type="text" class="form-control input-cliente"  required placeholder="30700">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="rfc" class="form-label font-weight-bold letras">Pais</label>
                        <input style="font-size:15px;" id="pais" name="pais" type="text" class="form-control input-cliente"  placeholder="Estado de México">
                    </div>
                    <div class="col-md-3 mb-4 ">
                            <label for="subname" class="form-label font-weight-bold letras" required>Estado</label>
                            <input style="font-size:15px;" id="estado" name="estado" type="text" class="form-control input-cliente"  required placeholder="Chiapas">
                    </div>
                    <div class="col-md-5 mb-4">
                        <label for="rfc" class="form-label font-weight-bold letras">Ciudad</label>
                        <input style="font-size:15px;" id="ciudad" name="ciudad" type="text" class="form-control input-cliente"  placeholder="Tapachula">
                    </div>
                    <div class="col-md-6 mb-4 ">
                            <label for="subname" class="form-label font-weight-bold letras" required>Calle</label>
                            <input style="font-size:15px;" id="calle" name="calle" type="text" class="form-control input-cliente"  required placeholder="13 Oriente entre 4ta y 6ta Norte">
                    </div>
                    <div style="display:flex; justify-content:space-between;" class="col-md-11 mb-4">
                        <button type="submit" class="button button-cliente mb-4">Cancelar</button>
                        <button type="submit" class="button button-cliente2 mb-4">Guardar</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="seguridad">
            <!--Menu Hamburguesa-->
            <div class="cliente-block">
                <i class="fa fa-bars icono-cliente ml-4" data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvas"></i>
                <h5 class="titulo-cliente">Configuración</h5>
            </div>
            <div class="menu-derecha3 mb-4">
                <h5>Seguridad</h5> <br>
                <span>En esta sección podras cambiar tu contraseña.</span>
            </div>
            <div class="row">
                <div class="col-md-10 mb-4">
                    <label for="subnamae" class="form-label font-weight-bold letras" required>Contraseña Actual</label>
                    <input style="font-size:15px;" id="pass" name="pass" type="password" class="form-control input-cliente"  required placeholder="Contraseña actual">
                </div>
                <div class="col-md-5 mb-4">
                    <label for="subnamae" class="form-label font-weight-bold letras" required>Nueva Contraseña</label>
                    <input style="font-size:15px;" id="pass" name="pass" type="password" class="form-control input-cliente"  required placeholder="Ejemplo: ( Jon@180199. )">
                    <span class="seguridad-span">8 caracteres minimo. Debe incluir una Mayuscula, numeros, letras y caracteres especiales.</span>
                </div>
                <div class="col-md-5 mb-4">
                    <label for="subnamae" class="form-label font-weight-bold letras" required>Confirmar nueva Contraseña</label>
                    <input style="font-size:15px;" id="pass" name="pass" type="password" class="form-control input-cliente"  required placeholder="Confirma tu nueva contraseña">
                </div>
                <div style="display:flex; justify-content:space-between;" class="col-md-11">
                    <button type="submit" class="button button-cliente mb-4">Cancelar</button>
                    <button type="submit" class="button button-cliente2 mb-4">Guardar</button>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    function mostrarSeguridad(){
        document.getElementById('seguridad').style.display = 'block';
        document.getElementById('cuenta').style.display = 'none';
        hiddenOffcanvas();
    }
    function mostrarPerfil(){
        document.getElementById('seguridad').style.display = 'none';
        document.getElementById('cuenta').style.display = 'block';
        hiddenOffcanvas();
    }

    const hiddenOffcanvas = () => {
        var myOffcanvas = document.getElementById('offcanvas');
        var bsOffcanvas = new bootstrap.Offcanvas(myOffcanvas);
        bsOffcanvas.hide();
    }
    
</script>
@endsection