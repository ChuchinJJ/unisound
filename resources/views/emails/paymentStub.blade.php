@php
if($payment->charges[0]->payment_method->object == "bank_transfer_payment"){
    $img_url = env('APP_URL')."/img/spei.png";
    $titulo = "transferencia";
    $tipo_refer = "clave";
    $refer = $payment->charges[0]->payment_method->clabe;
    $descripcion = "Utiliza exactamente esta cantidad al realizar el pago.";
    $instrucciones = "<li style='list-style: auto;font-size: 13px; margin-left: -20px; color:#000000'>Accede a tu banca en línea.</li>".
        "<li style='list-style: auto;font-size: 13px; margin-left: -20px; color:#000000'>Da de alta la CLABE en esta ficha. <strong>El banco deberá de ser STP</strong>.</li>".
        "<li style='list-style: auto;font-size: 13px; margin-left: -20px; color:#000000'>Realiza la transferencia correspondiente por la cantidad exacta en esta ficha, <strong>de lo contrario se rechazará el cargo</strong>.</li>".
        "<li style='list-style: auto;font-size: 13px; margin-left: -20px; color:#000000'>Al confirmar tu pago, el portal de tu banco generará un comprobante digital. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>";
}else{
    $titulo = "efectivo";
    $tipo_refer = "referencia";
}

$expiacion = \Carbon\Carbon::parse($payment->charges[0]->payment_method->expires_at)->format('d/m/Y');

if($payment->charges[0]->payment_method->type == "oxxo"){
    $img_url = env('APP_URL')."/img/oxxo.png";
    $refer = $payment->charges[0]->payment_method->reference;
    $descripcion = "OXXO cobrará una comisión adicional al momento de realizar el pago.";
    $instrucciones = "<li style='list-style: auto;font-size: 13px; margin-left: -20px; color:#000000'>Acude a la tienda OXXO más cercana. <a href='https://www.google.com.mx/maps/search/oxxo/' target='_blank' style='color: #e21818 !important;text-decoration: none;'>Encuéntrala aquí</a>.</li>".
                        "<li style='list-style: auto;font-size: 13px; margin-left: -20px; color:#000000'>Indica en caja que quieres realizar un pago de servicio<strong></strong>.</li>".
                        "<li style='list-style: auto;font-size: 13px; margin-left: -20px; color:#000000'>Dicta al cajero el número de referencia en esta ficha para que tecleé directamete en la pantalla de venta.</li>".
                        "<li style='list-style: auto;font-size: 13px; margin-left: -20px; color:#000000'>Realiza el pago correspondiente con dinero en efectivo.</li>".
                        "<li style='list-style: auto;font-size: 13px; margin-left: -20px; color:#000000'>Al confirmar tu pago, el cajero te entregará un comprobante impreso.".
                            "<strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.".
                        "</li>";
}
@endphp
<section style="background-color: #21252908; line-height: var(--bs-body-line-height);">
    <style>
        .im{
            margin-left: auto;
        }
    </style>
    <div style="text-align: -webkit-center; padding-top:20px; margin-right: 0px; padding-bottom:20px;">
        <div style="text-align:center; margin-bottom:10px;">
            <img src="{{ env('APP_URL') }}/img/icono-unisound.png" alt="Logo de Unisound" width="100px"/>
            <h1 style="font-size: calc(0.6rem + 1.5vw); color:black; margin-bottom: 0; margin-top: 0;">¡Pago con {{ $titulo }}!</h1>
        </div>
        <div style="flex: 0 0 auto; width: 100%;">
            <div style="width: 80%; max-width: 550px; padding: 8%; padding-bottom: 40px; margin-bottom:20px; min-width: 0; word-wrap: break-word; background-color: #fff; background-clip: border-box; border: 1px solid rgba(0,0,0,.125); border-radius: 0.25rem;">
                <h3 style="text-align:center; font-size: calc(0.8rem + .6vw); margin-top:0; color:black">
                    <b>¡Hola {{ $cliente->nombre }}!</b>
                    <br>
                    <b>Aquí tienes tu {{$tipo_refer}} de pago:</b>
                </h3>
                <br>
                <div style="width: 100%; float: left;">
                    <div style="text-align: left; width: 100%; max-width: 150px; display: inline-block; float: left;">
                        <img src="{{ $img_url }}" alt="{{ $payment->charges[0]->payment_method->type }}" alt="Imagen de metodo de pago" style="width:120px">
                    </div>
                    <div style="text-align: right; mwidth: 100%; max-width: 320px; display: inline-block; float: right;">
                        <div>
                            <h3 style="margin-bottom: 10px;font-size: 15px;font-weight: 600;text-transform: uppercase; color:#000000">Monto a pagar</h3>
                            <h2 style="font-size: calc(0.6rem + 2.8vw);color: #000000;line-height: 24px;margin-bottom: 15px;">
                                ${{ number_format($payment->amount/100, 2, ".", ",") }} 
                                <sup style="font-size: 16px;position: relative;top: -2px;">{{ $payment->currency }}</sup>
                            </h2>
                        </div>
                        <p style="font-size: 10px;line-height: 14px; color:#000000">{{$descripcion}}</p>
                    </div>
                </div>
                <div style="text-align: justify;">
                    <h3 style="margin-bottom: 10px;font-size: calc(0.6rem + 1.2vw);font-weight: 600;text-transform: uppercase; text-align: left">
                        {{$tipo_refer}}
                    </h3>
                    <h1 style="font-size: calc(0.6rem + 2.8vw); margin-bottom: 10px;color: #000000;text-align: center;margin-top: -1px;padding: 6px 0 7px;border: 1px solid #b0afb5;border-radius: 4px;background: #f8f9fa;">
                        {{ $refer }}
                    </h1>
                    <p style="color:#4f5365; font-size: 90%;margin-bottom: 25px;">Esta referencia expirará el {{$expiacion}}, realiza tu depósito antes de esta fecha.</p>
                </div>

                @if(isset($payment->charges[0]->payment_method->barcode_url))
                <img src="{{$payment->charges[0]->payment_method->barcode_url}}" alt="Barcode" style="width:200px">
                @endif

                <div style="padding: 32px 5% 25px 5%;border-top: 1px solid #b0afb5;background: #f8f9fa; text-align: left; margin-top: 30px;">
                    <h3 style="color:#000000">Instrucciones:</h3>
                    <div>
                        {!! $instrucciones !!}
                    </div>
                    <div style="margin-top: 22px;padding: 22px 20px 24px;color: #108f30;text-align: center;border: 1px solid #108f30;border-radius: 4px;background: #ffffff;">
                        Al completar estos pasos recibirás un correo de
                        <strong>Unisound</strong> confirmando tu pago.
                    </div>
                </div>
                <center>
                    <p style="color:black; margin-bottom: 5px; margin-top: 40px;">Si tienes un problema estamos para ayudarte</p>
                    <a href="{{ env('APP_URL') }}/contact" style="color: #de3a3a; text-decoration: none; margin-bottom: 5px; font-size: 13px;">Contáctanos</a>
                    <p style="margin-bottom: 8px;margin-top: 5px;"><strong style="color:black">Saludos, equipo de Unisound.</strong></p>
                </center>
            </div>
        </div>
    </div>
</section>