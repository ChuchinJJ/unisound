@extends('admin.container')
@section('contenido')

    <div class="content-wrapper">
        <div class="content-header">
        <div class="container-fluid">
            <div class="row m-3 align-items-center">
            <div class="col-sm-6">
                <h1 class="m-0">Ventas de clientes</h1>
            </div>
            </div>
        </div>
        </div>
    

    <div class="content">
        <div class="content-fluid">
            <div class="card">
                <div class="card-slider">
            
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
                                            $nombre = $cliente->nombre;
                                            $apellidos = $cliente->apellidos;
                                        @endphp
                                        {{ $nombre." ".$apellidos }}
                                    </td>
                                    <td data-label="Estado"><div class="bg-status bg-{{ $venta->status }}">{{ $venta->status }}</div></td>
                                    <td data-label="Total">${{ number_format($venta->total,2,".",",") }}</td>
                                    <td data-label="Pagado" class="pagado">
                                        @if($venta->pagado == 0)
                                            <i class="circle-pagado venta-no-pagado">
                                                <svg style="width:13px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="#ffff">
                                                    <path d="M376.6 427.5c11.31 13.58 9.484 33.75-4.094 45.06c-5.984 4.984-13.25 7.422-20.47 7.422c-9.172 0-18.27-3.922-24.59-11.52L192 305.1l-135.4 162.5c-6.328 7.594-15.42 11.52-24.59 11.52c-7.219 0-14.48-2.438-20.47-7.422c-13.58-11.31-15.41-31.48-4.094-45.06l142.9-171.5L7.422 84.5C-3.891 70.92-2.063 50.75 11.52 39.44c13.56-11.34 33.73-9.516 45.06 4.094L192 206l135.4-162.5c11.3-13.58 31.48-15.42 45.06-4.094c13.58 11.31 15.41 31.48 4.094 45.06l-142.9 171.5L376.6 427.5z"/>
                                                </svg>
                                            </i>
                                        @else
                                            <i class="fa fa-check circle-pagado venta-pagado"></i>
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
                </div> 
            </div> 

        </div>
    </div>  
</div>

<script>
document.getElementById('clientes').classList.add('active');
$(document).ready(function(){
  $("#buscador").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tablita tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@endsection