@extends('layouts.container')
@section('contenido')

  <body class="bg-dark">

    <section>
            <div class="px-lg-5 p py-lg-4 p-4 w-100 align-self-center">
                <h1 class="letras1 text-center mb-4 "> Completa todos los campos</h1>
                <form class="row">

                        <div class="col-md-3 mb-4">
                            <label for="" class="form-label font-weight-bold letras ">Nombre </label>
                            <input style="font-size:15px;" type="text" class="form-control bg-dark-x border-0" id="" required="" placeholder="Escribe tu o tus nombres" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-3 mb-4 ">
                            <label for="exampleInputPassword1" class="form-label font-weight-bold letras">Apellidos</label>
                            <input style="font-size:15px;" type="text" class="form-control bg-dark-x border-0 mb-4" required="" placeholder="Escribe tus apellidos" id="exampleInputPassword1">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="" class="form-label font-weight-bold letras ">RFC </label>
                            <input style="font-size:15px;" type="text" class="form-control bg-dark-x border-0" id="" required="" placeholder="Escribe tu RFC" aria-describedby="">
                        </div>

                        <div class="col-md-3 mb-4">
                            <label for="" class="form-label font-weight-bold letras ">Telefono </label>
                            <input style="font-size:15px;" type="tel" class="form-control bg-dark-x border-0" id="" required="" placeholder="Escribe tu numero de telefono" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-2 mb-4">
                            <label for="" class="form-label font-weight-bold letras ">C. Postal </label>
                            <input style="font-size:15px;" type="text" class="form-control bg-dark-x border-0" id="" required="" placeholder="Escribe tu Codigo Postal" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-2 mb-4">
                            <label for="" class="form-label font-weight-bold letras ">Pais </label>
                            <input style="font-size:15px;" type="text" class="form-control bg-dark-x border-0" id="" required="" placeholder="Escribe tu Pais" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-2 mb-4">
                            <label for="" class="form-label font-weight-bold letras ">Estado </label>
                            <input style="font-size:15px;" type="text" class="form-control bg-dark-x border-0" id="" required="" placeholder="Ingresa tu Estado o región" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-3 mb-4">
                            <label for="" class="form-label font-weight-bold letras ">Ciudad </label>
                            <input style="font-size:15px;" type="text" class="form-control bg-dark-x border-0" id="" required="" placeholder="Escribe tu ciudad actual" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-3 mb-4">
                            <label for="" class="form-label font-weight-bold letras ">Calle </label>
                            <input style="font-size:15px;" type="text" class="form-control bg-dark-x border-0" id="" required="" placeholder="Nombre o Num. de Calle donde vives" aria-describedby="emailHelp">
                        </div>

                        <div class="col-md-2 mb-4">
                            <label for="" class="form-label font-weight-bold letras ">Fecha de Nacimiento </label>
                            <input style="font-size:15px;" type="date" class="form-control bg-dark-x border-0 mb-4" id="" required="" placeholder="Ingresa tu fecha de nacimiento" aria-describedby="emailHelp">
                        
                        </div>
                        
                        <div class="">
                        <button style="padding: 5px;" type="submit" class="btn d-grid col-6 mx-auto mb-4 ">Terminar</button>
                        </div>

                </form>

                </div>
            </div>
        </div>
    </section>
@endsection