@php
if($payment->charges[0]->payment_method->object == "bank_transfer_payment"){
    $img_url = "https://unisound.com.mx/img/spei.png";
    $titulo = "transferencia";
    $tipo_refer = "clave";
    $refer = $payment->charges[0]->payment_method->clabe;
    $descripcion = "Utiliza exactamente esta cantidad al realizar el pago.";
    $instrucciones = "<li>Accede a tu banca en línea.</li>".
        "<li>Da de alta la CLABE en esta ficha. <strong>El banco deberá de ser STP</strong>.</li>".
        "<li>Realiza la transferencia correspondiente por la cantidad exacta en esta ficha, <strong>de lo contrario se rechazará el cargo</strong>.</li>".
        "<li>Al confirmar tu pago, el portal de tu banco generará un comprobante digital. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>";
}else{
    $titulo = "efectivo";
    $tipo_refer = "referencia";
    $refer = $payment->charges[0]->payment_method->reference;
    $img_url = "";
    $descripcion = "";
    $instrucciones = "";
}
$expiacion = \Carbon\Carbon::parse($payment->charges[0]->payment_method->expires_at)->format('d/m/Y');

if($payment->charges[0]->payment_method->type == "oxxo"){
    $img_url = "https://unisound.com.mx/img/oxxo.png";
    $descripcion = "OXXO cobrará una comisión adicional al momento de realizar el pago.";
    $instrucciones = "<li>Acude a la tienda OXXO más cercana. <a href='https://www.google.com.mx/maps/search/oxxo/' target='_blank'>Encuéntrala aquí</a>.</li>".
                        "<li>Indica en caja que quieres realizar un pago de servicio<strong></strong>.</li>".
                        "<li>Dicta al cajero el número de referencia en esta ficha para que tecleé directamete en la pantalla de venta.</li>".
                        "<li>Realiza el pago correspondiente con dinero en efectivo.</li>".
                        "<li>Al confirmar tu pago, el cajero te entregará un comprobante impreso.".
                            "<strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.".
                        "</li>";
}
@endphp
<!DOCTYPE html>
<html lang="es-MX" class="scheme_original">
<head>
	<title>Referencia de pago Unisound</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/icon.ico') }}" sizes="32x32" />
	<link rel="icon" href="{{ asset('img/icon.ico') }}" sizes="192x192" />
	<link rel="icon" href="{{ asset('img/icono-unisound.png') }}" sizes="32x32" />
	<link rel="icon" href="{{ asset('img/icono-unisound.png') }}" sizes="192x192" />
    <style>
        * 	 { margin: 0;padding: 0; }
        body { font-size: 14px; margin-top: 60px; }

        h3 {
            margin-bottom: 10px;
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .opps {
            width: 496px; 
            border-radius: 4px;
            box-sizing: border-box;
            padding: 0 45px;
            margin: 40px auto;
            overflow: hidden;
            border: 1px solid #b0afb5;
            font-family: 'Open Sans', sans-serif;
            color: #4f5365;
        }

        .opps-reminder {
            position: relative;
            top: -1px;
            padding: 9px 0 10px;
            font-size: 11px;
            text-transform: uppercase;
            text-align: center;
            color: #ffffff;
            background: #000000;
        }

        .opps-info {
            margin-top: 26px;
            position: relative;
        }

        .opps-info:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;

        }

        .opps-brand {
            width: 45%;
            float: left;
        }

        .opps-brand img {
            max-width: 250px;
            margin-top: 2px;
        }

        .opps-ammount {
            width: 55%;
            float: right;
        }

        .opps-ammount h2 {
            font-size: 36px;
            color: #000000;
            line-height: 24px;
            margin-bottom: 15px;
        }

        .opps-ammount h2 sup {
            font-size: 16px;
            position: relative;
            top: -2px
        }

        .opps-ammount p {
            font-size: 10px;
            line-height: 14px;
        }

        .opps-reference {
            margin-top: 14px;
        }

        .opps h1 {
            font-size: 27px;
            color: #000000;
            text-align: center;
            margin-top: -1px;
            padding: 6px 0 7px;
            border: 1px solid #b0afb5;
            border-radius: 4px;
            background: #f8f9fa;
        }

        .opps-instructions {
            margin: 32px -45px 0;
            padding: 32px 45px 45px;
            border-top: 1px solid #b0afb5;
            background: #f8f9fa;
        }

        ol {
            margin: 17px 0 0 16px;
        }

        li + li {
            margin-top: 10px;
            color: #000000;
        }

        a {
            color: #1155cc;
        }

        .opps-footnote {
            margin-top: 22px;
            padding: 22px 20 24px;
            color: #108f30;
            text-align: center;
            border: 1px solid #108f30;
            border-radius: 4px;
            background: #ffffff;
        }
    </style>
</head>

<body>
    <center>
            <img src="https://www.unisound.com.mx/img/icono-unisound.png" alt="Logo de Unisound" width="100px"/>
            <h1 style="margin-top:20px;">Pago con {{ $titulo }}</h1>
    </center>
    <div class="opps">
        <div class="opps-header">
            <div class="opps-info">
                <div class="opps-brand">
                        <img src="{{$img_url}}" alt="$payment->charges[0]->payment_method->type" width="80%">
                </div>
                <div class="opps-ammount">
                    <div>
                        <h3>Monto a pagar</h3>
                        <h2>${{ number_format($payment->amount/100, 2, ".", ",") }} <sup>{{ $payment->currency }}</sup></h2>
                    </div>
                    <p>{{$descripcion}}</p>
                </div>
            </div>
            <div class="opps-reference">
                <h3>{{$tipo_refer}}</h3>                        
                <h1>{{ $refer }}</h1>
                <small>Esta referencia expirará el {{$expiacion}}, realiza tu depósito antes de esta fecha.</small>
            </div>
        </div>
        <div class="opps-instructions">
            <h3>Instrucciones:</h3>
            <ol>
                {!! $instrucciones !!}
            </ol>
            <div class="opps-footnote">
                Al completar estos pasos recibirás un correo de
                <strong>Unisound</strong> confirmando tu pago.
            </div>
        </div>
    </div>
</body>