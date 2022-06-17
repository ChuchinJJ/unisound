<!DOCTYPE html>
<html lang="es-MX" class="scheme_original">
<head>
	<title>Unisound</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/icon.ico') }}" sizes="32x32" />
	<link rel="icon" href="{{ asset('img/icon.ico') }}" sizes="192x192" />
	<link rel="icon" href="{{ asset('img/icono-unisound.png') }}" sizes="32x32" />
	<link rel="icon" href="{{ asset('img/icono-unisound.png') }}" sizes="192x192" />
    <style>
        thead th{
            padding: 0.5rem 0.5rem; background-color: var(--bs-table-bg); border-bottom-width: 1px; box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }
        tbody tr{
            border-color: inherit; border-style: solid; border-width: 0;
        }
        tbody td{
            text-align: center; border-bottom-width: 1px; padding: 1rem 0.5rem; border-bottom: 1px solid #dee2e685;
        }
        .bg-status{
            display: inline-block;padding: 0.325rem 0.5rem;font-size: .85rem;font-weight: 600;line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 0.325rem;
        }
        .bg-Pedido{
            color: #50cd89;background-color: #e8fff3;
        }
        .bg-Entregado{
            color: #009ef7;background-color: #f1faff;
        }
        .bg-Cancelado{
            color: #f1416c;background-color: #fff5f8;
        }
        .total-venta{
            display: flex;
            align-items: end;
            margin-left: 5%;
            text-align: center;
        }
        .total-venta p{
            display: grid;
        }
    </style>
</head>
<body>
<center><h1>Reporte de pedidos</h1></center>
<span>
    <b>Inicio - fin: </b>{{ $fechas }}
    <b style="margin-left: 20%">Total: </b>{{ number_format($ventas->sum('total'),2,".",",") }}
    <b style="margin-left: 25px;">Total pagado: </b>{{ number_format($ventas->where('pagado', 1)->sum('total'),2,".",",") }}
</span>
<table width="100%" style="color: #212529; vertical-align: top; border-color: #dee2e6; border-collapse: collapse; margin-top:20px">
    <thead style="text-align: center; color: #fff; border-color: #373b3e; background-color: #212529;">
        <tr>
            <th>#</th>
            <th>Cliente</th>
            <th>Estado</th>
            <th>Total</th>
            <th>Pagado</th>
            <th>Fecha</th>
        </tr>
    </thead>

    <tbody>
        @forelse($ventas as $venta)
        <tr>
            <td>{{ $venta->id_venta }}</td>
            <td>
                @php
                    $cliente = $clientes->firstWhere('email', $venta->id_cliente);
                    $nombre = $cliente->nombre;
                    $apellidos = $cliente->apellidos;
                @endphp
                {{ $nombre." ".$apellidos }}
            </td>
            <td><div class="bg-status bg-{{ $venta->status }}">{{ $venta->status }}</div></td>
            <td>${{ number_format($venta->total,2,".",",") }}</td>
            <td>
                @if($venta->pagado == 0)
                    No
                @else
                    Si
                @endif
            </td>
            <td>
                @php
                    setlocale(LC_TIME, "spanish");
                    $fecha_str = str_replace("/", "-", $venta->fecha->format('Y-m-d H:i:s'));
                    $fecha = date("d/m/Y", strtotime($fecha_str));
                @endphp
                {{ $fecha }}
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">
                <div class="no-products">
                    <p>No hubo transacciones en este periodo</p>
                    <i class="fa fa-calendar-times"></i>
                </div>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
</body>
</html>