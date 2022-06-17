@extends('admin.container')
@section('contenido')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
            <div class="col-sm-6">
                <h1 class="m-0">Cupones</h1>
            </div>
            <div class="col-sm-6 btn-top">
                <a class="btn btn-danger btn-lg" href="/admin/addcupon">Agregar <i class="fa fa-plus"></i></a>
            </div>
        </div>
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
                    <button type="button" class="btn btn-danger" onclick="cerrar()" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function cerrar(){
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>
    @endif

    <div class="content">
        <div class="content-fluid">
            <div class="card">
                <div class="card-slider">
                    <form method="post" action="" id="formulario">
                        @csrf
                        <input type="radio" class="btn-check" name="filtro" value="all" id="filtro-todos" 
                            autocomplete="off" onclick="enviar()" @if(old("filtro") == "all" || old("filtro") == "" ) checked @endif>
                        <label class="btn btn-outline-danger" for="filtro-todos" style="margin-right: 10px;">Todos</label>
                        <input type="radio" class="btn-check" name="filtro" value="vigentes" id="filtro-vigentes" 
                            autocomplete="off" onclick="enviar()" @if(old("filtro") == "vigentes") checked @endif>
                        <label class="btn btn-outline-success" for="filtro-vigentes">Vigente</label>
                    </form>
            
                    <div class="container-table">
                        <table style="border-right: 3px solid white; border-left: 3px solid white;" class="table table-sale" width="100%">
                            <thead>
                                <tr>
                                    <th># cupón</th>
                                    <th>Nombre</th>
                                    <th>Código</th>
                                    <th>Fecha inicio</th>
                                    <th>Fecha fin</th>
                                    <th>Decuento</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($cupones as $cupon)
                                <tr>
                                    @php
                                        $fecha_str_inicio = str_replace("/", "-", $cupon->fecha_inicio->format('Y-m-d H:i:s'));
                                        $fecha_inicio = date("d/m/Y", strtotime($fecha_str_inicio));
                                        $fecha_str_fin = str_replace("/", "-", $cupon->fecha_fin->format('Y-m-d H:i:s'));
                                        $fecha_fin = date("d/m/Y", strtotime($fecha_str_fin));
                                    @endphp
                                    <td data-label="# cupón">{{ $cupon->id_cupon }}</td>
                                    <td data-label="Nombre">{{ $cupon->nombre }}</td>
                                    <td data-label="Código">{{ $cupon->codigo }}</td>
                                    <td data-label="Fecha inicio">{{ $fecha_inicio }}</td>
                                    <td data-label="Fecha fin">{{ $fecha_fin }}</td>
                                    <td data-label="Descuento">{{ $cupon->descuento }}%</td>
                                    <td data-label="Acciones">
                                        <a href="/admin/cupones/{{ $cupon->id_cupon }}/update" title="Editar" class="btn btn-danger"><i class="fa fa-edit" style="font-size:19px;"></i></a>
                                        <a href="/admin/cupones/{{ $cupon->id_cupon }}/delete" title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <!--<div class="dropdown">
                                            <a class="fa fa-solid fa-angle-down icono-arrow" href="#" data-bs-toggle="dropdown" aria-expanded="false" id="icono" role="button"></a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="/admin/cupones/{{ $cupon->id_cupon }}/update">Editar</a></li>
                                                @if($cupon->deleted_at == null)
                                                <li><a class="dropdown-item" href="/admin/cupones/{{ $cupon->id_cupon }}/delete">Eliminar</a></li>
                                                @else
                                                <li><a class="dropdown-item" href="/admin/cupones/{{ $cupon->id_cupon }}/restore">Restaurar</a></li>
                                                @endif
                                            </ul>
                                        </div> -->
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8">
                                        <div class="no-products">
                                            <p>No hay cupones</p>
                                            <i class="fa fa-calendar-times"></i>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if(count($cupones) > 0)
                    <div class="pagination-products">
                        <div class="title-pagination">
                            <span>{{ $cupones->firstItem() }} - {{ $cupones->lastItem() }} de {{ $cupones->total() }}</span>
                        </div>
                        <div class="controls-pagination">
                            <a @if(!$cupones->onFirstPage()) href="?page=1" @endif class="doble-arrow-left @if($cupones->onFirstPage()) no-control @endif"></a>
                            <a @if(!$cupones->onFirstPage()) href="{{ $cupones->previousPageUrl() }}" @endif class="arrow-left @if($cupones->onFirstPage()) no-control @endif"></a>
                            <a @if($cupones->currentPage() != $cupones->lastPage()) href="{{ $cupones->nextPageUrl() }}" @endif class="arrow-right @if($cupones->currentPage() == $cupones->lastPage()) no-control @endif"></a>
                            <a @if($cupones->currentPage() != $cupones->lastPage()) href="{{ $cupones->url($cupones->lastPage()) }}" @endif class="doble-arrow-right @if($cupones->currentPage() == $cupones->lastPage()) no-control @endif"></a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('cupones').classList.add('active');
    
    function enviar(){
		document.getElementById("formulario").submit();
	}
</script>
@endsection