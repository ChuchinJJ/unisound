<section style="background-color: #21252908; line-height: var(--bs-body-line-height);">
    <style>
        .im{
            margin-left: auto;
        }
    </style>
    <div style="text-align: -webkit-center; padding-top:20px; margin-right: 0px; padding-bottom:20px;">
        <div style="text-align:center; margin-bottom:10px;">
            <img src="{{ env('APP_URL') }}/img/icono-unisound.png" alt="Logo de Unisound" width="100px"/>
            <h1 style="font-size: calc(0.6rem + 1.5vw); color:black; margin-bottom: 0; margin-top: 0;">¡Felicidades! Pago Confirmado</h1>
        </div>
        <div style="flex: 0 0 auto; width: 100%;">
            <div style="width: 85%; max-width: 650px; padding: 20px; padding-bottom: 40px; margin-bottom:20px; min-width: 0; word-wrap: break-word; background-color: #fff; background-clip: border-box; border: 1px solid rgba(0,0,0,.125); border-radius: 0.25rem;">
                <h3 style="text-align:center; font-size: calc(0.8rem + .6vw); margin-top:0; color:black; padding-top: 30px;">
                    <b>¡Hola {{ $cliente->nombre }}!</b>
                    <br>
                    <b>Gracias por tu compra</b>
                </h3>
                <br>
                <div style="text-align: left; padding-left:8%; padding-right:8%">
                    <h3 style="margin-bottom:10px; font-size: 18px;color: black;">Resumen de tu compra</h3>
                    <hr style="margin-top: 5px; color:black; border-color: white;">
                    <br>
                    <div style="align-items: start;display: flex;">
                        <img src="{{ env('APP_URL') }}/img/truck-icon.png" alt="Icono de camion" width="50px" height="50px" style="margin-right:15px;">
                        <div>
                            <b style="font-size: 18px;color: black;">Envio a domicilio</b>
                            <p style="margin-top: 5px; font-size: 16px; line-height: 20px;color: black;">
                                {{ $cliente->calle }}
                                <br>
                                {{ $cliente->ciudad }}, {{ $cliente->estado }}
                                <br>
                                {{ $cliente->nombre }} {{ $cliente->apellidos }} - {{ $cliente->telefono }}
                            </p>
                        </div>
                    </div>
                    <br>
                    <div style="align-items: start;display: flex;">
                        <img src="{{ env('APP_URL') }}/img/money-icon.png" alt="Icono de moneda" width="50px" height="50px" style="margin-right:15px;">
                        <div>
                            <b style="font-size: 18px;color: black;">Metodo de pago</b>
                            <p style="margin-top: 5px; font-size: 16px; line-height: 20px;color: black;">
                                ${{ number_format($order->amount/100, 2, ".", ",") }} 
                                <sup style="font-size: 9px;position: relative;top: -2px;">{{ $order->currency }}</sup>

                                <br>
                                @if($order->payment_method->object == "card_payment")
                                    Tarjeta {{ $order->payment_method->brand }}
                                    <br>
                                    Número de tarjeta: **** {{ $order->payment_method->last4 }}
                                @elseif($order->payment_method->object == "bank_transfer_payment")
                                    Transferencia bancaria SPEI
                                @else
                                    {{ $order->payment_method->store_name }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <div style="text-align: left;">
                    <p><b style="margin-bottom:10px;color: black;">
                        # {{$venta->id_venta}}
                        <br>
                        NÚMERO DE COMPRA
                    </b></p>
                </div>
                <table width="100%" style="color: #212529; vertical-align: top; border-color: #dee2e6; border-collapse: collapse; table-layout: fixed;">
                    <thead style="text-align: center; color: #fff; border-color: #373b3e; background-color: #212529;">
                        <tr>
                            <th style="padding: 0.5rem 0.5rem; background-color: var(--bs-table-bg); border-bottom-width: 1px; box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);">Producto</th>
                            <th style="padding: 0.5rem 0.5rem; background-color: var(--bs-table-bg); border-bottom-width: 1px; box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);">Cantidad</th>
                            <th style="padding: 0.5rem 0.5rem; background-color: var(--bs-table-bg); border-bottom-width: 1px; box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);">Precio</th>
                            <th style="padding: 0.5rem 0.5rem; background-color: var(--bs-table-bg); border-bottom-width: 1px; box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($detalles as $detalle)
                        <tr style="border-color: inherit; border-style: solid; border-width: 0;">
                            <td style="text-align: center; width: 50%; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">
                                {{ $detalle->producto }}
                            </td>
                            <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">
                                {{ $detalle->cantidad }}
                            </td>
                            <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">
                                @if($detalle->descuento > 0)
                                <small style="text-decoration: line-through;">
                                    <span>&#36;</span>
                                    {{ number_format($detalle->precio+$detalle->descuento,2,".",",") }}
                                </small>
                                <br>
                                <bdi>
                                    <span>&#36;</span>
                                    {{ number_format($detalle->precio,2,".",",") }}
                                </bdi>
                                @else
                                <bdi><span>&#36;</span>{{ number_format($detalle->precio,2,".",",") }}</bdi>
                                @endif
                            </td>
                            <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">
                                <bdi><span>&#36;</span>{{ number_format($detalle->cantidad*$detalle->precio,2,".",",") }}</bdi>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot style="border-top: 2px solid currentColor;">
                        @if($venta->descuento > 0)
                        <tr style="border-color: inherit; border-style: solid; border-width: 0;">
                            <th style="text-align: right;  border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;" colspan="3">Subtotal: </th>
                            <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;"><span>
                                <bdi><span>&#36;</span>{{ number_format($venta->total+$venta->descuento,2,".",",") }}</bdi>
                            </span></td>
                        </tr>
                        <tr style="border-color: inherit; border-style: solid; border-width: 0;">
                            <th style="text-align: right; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;" colspan="3">Descuento: </th>
                            <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;"><span>
                                <bdi><span>&#36;</span>{{ number_format($venta->descuento,2,".",",") }}</bdi>
                            </span></td>
                        </tr>
                        @endif
                        <tr style="border-color: inherit; border-style: solid; border-width: 0;">
                            <th style="text-align: right;  border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;" colspan="3">Total: </th>
                            <td style="text-align: center; border-bottom-width: 1px; padding: 0.5rem 0.5rem; border-bottom: 1px solid #dee2e685;">
                                <strong><span>
                                    <bdi><span>&#36;</span>{{ number_format($venta->total,2,".",",") }}</bdi>
                                </span></strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                
                <center>
                    <p style="color:black; margin-bottom: 5px; margin-top: 40px;">Si tienes un problema estamos para ayudarte</p>
                    <a href="http://{{ env('APP_URL') }}/contact" style="color: #de3a3a; text-decoration: none; margin-bottom: 5px; font-size: 13px;">Contáctanos</a>
                    <p style="margin-bottom: 8px;margin-top: 5px;"><strong style="color:black">Saludos, equipo de Unisound.</strong></p>
                </center>
            </div>
        </div>
    </div>
</section>