@extends('admin.container')
@section('contenido')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
            <h1 class="m-0">Detalle de venta</h1>
        </div>
      </div>
    </div>

    <div class="content">
        <div class="content-fluid">
            <div class="card-deck">
                <div class="card">
                    <div class="card-slider">
                        <h4>Detalles de venta #{{ $venta->id_venta }}</h4>
                        @php
                            setlocale(LC_TIME, "spanish");
                            $fecha_str = str_replace("/", "-", $venta->fecha->format('Y-m-d H:i:s'));
                            $newDate = date("d-m-Y", strtotime($fecha_str));
                            $fecha = strftime("%d de %B de %Y", strtotime($newDate));
                        @endphp
                        <p><b>Fecha de venta:</b> {{ $fecha }}</p>
                        <p><b>Pagado:</b> @if($venta->pagado == 0) No @else Si @endif</p>
                        <p class="bg-status bg-{{ $venta->status }}">{{ $venta->status }}</p>
                        @if($venta->detalles != null)
                            <p>{{ $venta->detalles }}</p>
                        @endif
                    </div>
                </div>
                <div class="card">
                    <div class="card-slider card-cliente">
                        <h4>Detalles de cliente</h4>
                        <p><i class="fa fa-user"></i>{{ $cliente->nombre." ".$cliente->apellidos }}</p>
                        <p><i class="fa fa-phone"></i><b>Teléfono: </b>{{ $cliente->telefono }}</p>
                        <p><i class="fa fa-envelope"></i><b>Email: </b>{{ $cliente->email }}</p>
                        <p><i class="fa fa-location-arrow"></i><b>Dirección:</b>
                            {{ $cliente->calle.", ".$cliente->ciudad.", ".$cliente->estado.", ".$cliente->pais }}
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-slider">
                    <h4>Venta #{{ $venta->id_venta }}</h4>
                    <br>
                    <table class="table table-detail-sale" width="100%">
                        <thead>
                            <tr>
                                <th colspan="2">Producto</th>
                                <th>Cantidad</th>
                                <th>Precio unitario</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($detalles as $detalle)
                            <tr>
                                <td data-label="Producto" class="detalle-venta-imagen" style="text-align: right">
                                @foreach($colores as $color)
                                    @if($color->id_color == $detalle->id_color)
                                        @php $producto = $productos->firstWhere('id_producto', $color->id_producto); @endphp
                                        <img  width="40%" src="/storage/img/products/{{ $producto->imagen1 }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                                    @endif
                                @endforeach
                                </td>
                                <td class="detalle-venta-producto">{{ $detalle->producto }}</td>
                                <td data-label="Cantidad">{{ $detalle->cantidad }}@if($detalle->cantidad >1) unidades @else unidad @endif</td>
                                <td data-label="Precio unitario">${{ number_format($detalle->precio, 2, ".", ",") }}</td>
                                <td data-label="Subtotal">${{ number_format($detalle->precio*$detalle->cantidad, 2, ".", ",") }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            @if ($venta->descuento > 0 )
                            <tr>
                                <th colspan="4">Subtotal</th>
                                <td>
                                    <bdi>${{ number_format($venta->total+$venta->descuento,2,".",",") }}</bdi>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="4">Descuento</th>
                                <td>${{ number_format($venta->descuento,2,".",",") }}</td>
                            </tr>
                            @endif
                            <tr>
                                <th colspan="4">Total</th>
                                <td>
                                    <strong>${{ number_format($venta->total,2,".",",") }}</strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('ventas').classList.add('active');
</script>
@endsection
