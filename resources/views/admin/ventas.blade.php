@extends('admin.container')
@section('contenido')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
          <div class="col-sm-6">
            <h1 class="m-0">Ventas</h1>
          </div>
          <!--<div class="col-sm-6 btn-top">
            <a class="btn btn-danger btn-lg" href="/admin/">Agregar <i class="fa fa-plus"></i></a>
          </div>-->
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
                    <form method="post" action="" id="formulario" class="row m-2">
                        @csrf
                        <div class="filter-select">
                            <div class="product-filter mb-2">
                                <span>Fecha</span>
                                <div class="input-group date" id="datetimepicker" data-target-input="nearest">
                                    <input type="text" name="fechas" class="form-control datetimepicker-input" value="{{ old('fechas', date('d/m/Y').' - '.date('d/m/Y')) }}"/>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-select">
                            <div class="product-filter mb-2" style="margin-left: 30px;">
                                <span>Estado</span>
                                <select class="select-admin" name="status" onchange="enviar()">
                                    <option value="">Todas</option>
                                    <option value="Pedido" @if(old('status') == "Pedido") selected='selected' @endif>Pedido</option>
                                    <option value="Entregado" @if(old('status') == "Entregado") selected='selected' @endif>Entregado</option>
                                    <option value="Cancelado" @if(old('status') == "Cancelado") selected='selected' @endif>Cancelado</option>
                                </select>
                            </div>
                        </div>
                    </form>
            
                    <div class="container-table">
                        <table style="border-right: 3px solid white; border-left: 3px solid white;" class="table" width="100%">
                            <thead>
                                <tr>
                                    <th>ID pedido</th>
                                    <th>Cliente</th>
                                    <th>Estado</th>
                                    <th>Total</th>
                                    <th>Pagado</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($ventas as $venta)
                                <tr>
                                    <td data-label="Id">{{ $venta->id_venta }}</td>
                                    <td data-label="Cliente">
                                        @php
                                            $cliente = $clientes->firstWhere('email', $venta->id_cliente);
                                            $nombre = $cliente->nombre;
                                            $apellidos = $cliente->apellidos;
                                        @endphp
                                        {{ $nombre." ".$apellidos }}
                                    </td>
                                    <td data-label="Estado"><div class="bg-status bg-{{ $venta->status }}">{{ $venta->status }}</div></td>
                                    <td data-label="Total">${{ number_format($venta->total,2,".",",") }}</td>
                                    <td data-label="Pagado">
                                        @if( $venta->pagado == 1)
                                        <i style="color:#31cf31b5;" class="fa fa-check"></i>
                                        @else
                                        <svg style="width:13px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path d="M376.6 427.5c11.31 13.58 9.484 33.75-4.094 45.06c-5.984 4.984-13.25 7.422-20.47 7.422c-9.172 0-18.27-3.922-24.59-11.52L192 305.1l-135.4 162.5c-6.328 7.594-15.42 11.52-24.59 11.52c-7.219 0-14.48-2.438-20.47-7.422c-13.58-11.31-15.41-31.48-4.094-45.06l142.9-171.5L7.422 84.5C-3.891 70.92-2.063 50.75 11.52 39.44c13.56-11.34 33.73-9.516 45.06 4.094L192 206l135.4-162.5c11.3-13.58 31.48-15.42 45.06-4.094c13.58 11.31 15.41 31.48 4.094 45.06l-142.9 171.5L376.6 427.5z"/>
                                        </svg>
                                        @endif
                                    </td>
                                    <td data-label="Fecha">
                                        @php
                                            setlocale(LC_TIME, "spanish");
                                            $fecha_str = str_replace("/", "-", $venta->fecha->format('Y-m-d H:i:s'));
                                            $newDate = date("d-m-Y", strtotime($fecha_str));
                                            $fecha = strftime("%d de %B, %Y", strtotime($newDate));
                                        @endphp
                                        {{ $fecha }}
                                    </td>
                                    <td data-label="Acciones">
                                        <div class="dropdown">
                                            <a class="fa fa-solid fa-angle-down icono-arrow" href="#" data-bs-toggle="dropdown" aria-expanded="false" id="icono" role="button"></a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="/admin/ventas/{{ $venta->id_venta }}/detalle">Ver</a></li>
                                                <li><a class="dropdown-item" href="/admin/ventas/{{ $venta->id_venta }}/update">Editar</a></li>
                                            </ul>
                                        </div>
                                        <i></i>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">
                                        <div class="no-products">
                                            <p>No hubo transacciones en este periodo</p>
                                            <i class="fa fa-calendar-times"></i>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if(count($ventas) > 0)
                    <div class="pagination-products">
                        <div class="title-pagination">
                            <span>{{ $ventas->firstItem() }} - {{ $ventas->lastItem() }} de {{ $ventas->total() }}</span>
                        </div>
                        <div class="controls-pagination">
                            <a @if(!$ventas->onFirstPage()) href="?page=1" @endif class="doble-arrow-left @if($ventas->onFirstPage()) no-control @endif"></a>
                            <a @if(!$ventas->onFirstPage()) href="{{ $ventas->previousPageUrl() }}" @endif class="arrow-left @if($ventas->onFirstPage()) no-control @endif"></a>
                            <a @if($ventas->currentPage() != $ventas->lastPage()) href="{{ $ventas->nextPageUrl() }}" @endif class="arrow-right @if($ventas->currentPage() == $ventas->lastPage()) no-control @endif"></a>
                            <a @if($ventas->currentPage() != $ventas->lastPage()) href="{{ $ventas->url($ventas->lastPage()) }}" @endif class="doble-arrow-right @if($ventas->currentPage() == $ventas->lastPage()) no-control @endif"></a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('ventas').classList.add('active');
    
    function enviar(){
		document.getElementById("formulario").submit();
	}
    
    $(function () {
        $('#datetimepicker').daterangepicker({}, function(start, end, label) {
            $('#datetimepicker input').val(start.format('D/MM/YYYY') + ' - ' + end.format('D/MM/YYYY'));
            enviar();
        });
    });
</script>
@endsection