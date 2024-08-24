<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
</head>
<section style="background-color: #21252908; line-height: var(--bs-body-line-height);">
    <style>
        .im{
            margin-left: auto;
        }
    </style>
    <div style="text-align: -webkit-center; padding-top:20px; margin-right: 0px; padding-bottom:20px;">
        <div style="text-align:center; margin-bottom:10px;">
            <img src="{{ env('APP_URL') }}/img/icono-unisound.png" alt="Logo de Unisound" width="100px"/>
            <h1 style="font-size: calc(0.6rem + 1.5vw); color:black; margin-bottom: 0; margin-top: 0;">¡Gracias por su compra!</h1>
        </div>
        <div style="flex: 0 0 auto; width: 100%;">
            <div style="width: 80%; max-width: 550px; padding: 8%; padding-bottom: 40px; margin-bottom:20px; min-width: 0; word-wrap: break-word; background-color: #fff; background-clip: border-box; border: 1px solid rgba(0,0,0,.125); border-radius: 0.25rem;">
                <h3 style="text-align:center; font-size: calc(0.8rem + .6vw); margin-top:0; color:black"><b>¡Hola {{ $cliente->nombre }}! Tu pedido esta en proceso:</b></h3>
                <br>
                <div style="text-align: left;">
                    <b style="color:black;">INFORMACIÓN SOBRE TU PEDIDO:</b>
                </div>
                <hr style="margin-top: 5px; color:black; border-color: white;">
                <div style="width: 100%;float: left;margin-bottom: 20px;">
                    <div style="text-align: left; max-width: 170px;display: inline-block;width: 100%;float: left;">
                        <h5 style="font-size: 1rem; margin-bottom: 0.5rem; margin-top: 0;"><b>Pedido:</b></h5>
                        <h5 style="font-size: 1rem; margin-top: 0;">#{{ $venta->id_venta }}</h5>
                        <h5 style="font-size: 1rem; margin-bottom: 0.5rem; margin-top: 0; color:black"><b>Fecha del pedido:</b></h5>
                        @php
                            setlocale(LC_TIME, "spanish");
                            $fecha_str = str_replace("/", "-", $venta->fecha->format('Y-m-d H:i:s'));
                            $newDate = date("d-m-Y", strtotime($fecha_str));
                            $fecha = strftime("%d de %B del %Y", strtotime($newDate));
                        @endphp
                        <p style="font-size: 1rem; margin-top: 0; color:black">{{ $fecha }}</p>
                    </div>
                    <div class="cliente" style="text-align: right; margin-left: auto;max-width: 220px;width: 100%;display: inline-block;float: right;">
                        <h5 style="font-size: 1rem; margin-bottom: 0.5rem; margin-top: 0; color:black"><b>Para:</b></h5>
                        <h5 style="font-size: 1rem; margin-top: 0; color:black">{{ $cliente->nombre." ".$cliente->apellidos }}</h5>
                        <h5 style="font-size: 1rem; margin-bottom: 0.5rem; margin-top: 0; color:black"><b>Dirección:</b></h5>
                        <p style="margin-bottom:0; margin-top: 0; color:black; font-size: 15px;">{{ $cliente->calle }}</p>
                        <p style="margin-top:0; color:black; font-size: 15px;">{{ $cliente->ciudad.", ".$cliente->estado.", ".$cliente->pais }}</p>
                    </div>
                </div>
                <div style="text-align: left;">
                    <b style="margin-bottom:10px">ESTE ES TU PEDIDO:</b>
                </div>
                <table width="100%" style="color: #212529; vertical-align: top; border-color: #dee2e6; border-collapse: collapse;">
                    <thead style="text-align: center; color: #fff; border-color: #373b3e; background-color: #212529;">
                        <tr>
                            <th style="padding: 0.5rem 0.5rem; background-color: var(--bs-table-bg); border-bottom-width: 1px; box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);">Producto</th>
                            <th  style="padding: 0.5rem 0.5rem; background-color: var(--bs-table-bg); border-bottom-width: 1px; box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($detalles as $detalle)
                        <tr style="border-color: inherit; border-style: solid; border-width: 0;">
                            <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">
                                {{ $detalle->producto }}&nbsp;
                                <strong>&times;&nbsp;{{ $detalle->cantidad }}</strong>
                            </td>
                            <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">
                                <span>
                                @if($detalle->descuento > 0)
                                <bdi>
                                    <span>&#36;</span>
                                    {{ number_format($detalle->cantidad*$detalle->precio+$detalle->cantidad*$detalle->descuento,2,".",",") }}
                                </bdi>
                                <div style="margin-left: 10px; display: inline-block; align-items: end; padding: 4px; color: #fff; background-color: #dc3545; font-size: 75%; line-height: 1; border-radius: 0.25rem;">
                                    - ${{ number_format($detalle->cantidad*$detalle->descuento,2,".",",") }}
                                </div>
                                @else
                                <bdi><span>&#36;</span>{{ number_format($detalle->cantidad*$detalle->precio,2,".",",") }}</bdi>
                                @endif
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot style="border-top: 2px solid currentColor;">
                        @if($venta->descuento > 0)
                        <tr style="border-color: inherit; border-style: solid; border-width: 0;">
                            <th style="text-align: right;  border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">Subtotal: </th>
                            <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;"><span>
                                <bdi><span>&#36;</span>{{ number_format($venta->total+$venta->descuento,2,".",",") }}</bdi>
                            </span></td>
                        </tr>
                        <tr style="border-color: inherit; border-style: solid; border-width: 0;">
                            <th style="text-align: right; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">Descuento: </th>
                            <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;"><span>
                                <bdi><span>&#36;</span>{{ number_format($venta->descuento,2,".",",") }}</bdi>
                            </span></td>
                        </tr>
                        @endif
                        <tr style="border-color: inherit; border-style: solid; border-width: 0;">
                            <th style="text-align: right;  border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">Total: </th>
                            <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">
                                <strong><span>
                                    <bdi><span>&#36;</span>{{ number_format($venta->total,2,".",",") }}</bdi>
                                </span></strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <br>
                <p style="margin-top: 22px;padding: 22px 20px 24px;color: #212529;text-align: center;border: 1px solid #212529;border-radius: 4px;background: #ffffff;">Si ya pagaste envía tu comprobante de depósito o transferencia a:
                    <br>
                    Whatsapp: <a href="https://wa.me/529191007549" style="color: #de3a3a; text-decoration: none;">9191007549</a>
                    <br>
                    Correo: <a href="mailto:{{ env('MAIL_ATTENTION_ADDRESS') }}" style="color: #de3a3a; text-decoration: none;">{{ env('MAIL_ATTENTION_ADDRESS') }}</a>
                </p>
                <!--<br>
                <hr style="margin-top: 5px; border: 1px dashed #212529d1;">
                <br>
                <div>
                    <div style="text-align: left">
                        <b style="margin-bottom:10px">MEDIOS DE PAGOS UNISOUND IMUSA</b>
                    </div>
                    <table width="100%" style="border: 1px solid #dee2e685; border-collapse: collapse; margin-top: 20px">
                        <tr>
                            <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">Banamex</td>
                            <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">
                            Clave interbancaria: 002123700904256821
                            <br>
                            Suc: 7009, Cuenta: 425682
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">Bancomer</td>
                            <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">
                            Clave interbancaria: 012125004776140710
                            <br>
                            Para depositos: 0477614071
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">Banco Azteca</td>
                            <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">
                            Clave interbancaria: 127140001012928187
                            <br>
                            Número de tarjeta: 5343-8102-0367-6579
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">Atrato pago</td>
                            <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">Empresa: Unisound Imusa</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">PayPal</td>
                            <td style="border: 1px solid #dee2e685;padding: 0.5rem 0.75rem;vertical-align: middle;">
                            <a style="color: #de3a3a; text-decoration: none;" href="https://paypal.me/unisoundimusa1?country.x=MX&locale.x=es_XC">https://paypal.me/unisoundimusa1?country.x=MX&locale.x=es_XC</a>
                            </td>
                        </tr>
                    </table>
                    <div style="text-align: right">
                        <p style="margin-bottom:10px">Nombre: Liliana del Carmen Solorzano Sanchez</p>
                    </div>
                </div>-->
                <center>
                    <p style="color:black; margin-bottom: 5px; margin-top: 40px;">Si tienes un problema estamos para ayudarte</p>
                    <a href="{{ env('APP_URL') }}/contact" style="color: #de3a3a; text-decoration: none; margin-bottom: 5px; font-size: 13px;">Contáctanos</a>
                    <p style="margin-bottom: 8px;margin-top: 5px;"><strong style="color:black">Saludos, equipo de Unisound.</strong></p>
                </center>
            </div>
        </div>
    </div>
</section>