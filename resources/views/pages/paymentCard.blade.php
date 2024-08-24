@extends('layouts.container')
@section('contenido')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="https://pay.conekta.com/v1.0/js/conekta-checkout.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h5 class="page_title">Pago con tarjeta</h5>
            <div class="breadcrumbs">
                <span class="breadcrumbs_item current">Ingrese la información de su tarjeta</span>
            </div>
        </div>
    </div>
</div>

<div class="justify-content-center spinner-background" id="spinner" style="display:none;">
    <div class="spinner-border text-danger" role="status" style="width: 4rem; height: 4rem;">
        <span class="sr-only">Cargando...</span>
    </div>
</div>

<div id="conektaIframeContainer" style="height: 80vh;"></div>

<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" style="background-color: #00000085;@if(isset($paymentError)) display:block @endif" aria-hidden="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalTitle">Ocurrió un error</h5>
      </div>
      <div class="modal-body row" style="margin-right: 0px;">
        <i id="icon-success" class="fa fa-check-circle payment-success-icon" aria-hidden="true" style="display:none"></i>
	    <h4 class="mb-4" id="message-error">@if(isset($paymentError)) {{$paymentError}} @endif</h4>
        <div id="message-success"></div>
      </div>
      <div class="modal-footer">
        <button id="cerrar" type="button" class="btna" onclick="@if(isset($paymentError)) window.history.back(); @else window.location.reload(); @endif" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>
@if(isset($token))
<script type="text/javascript">
    var spinner = document.getElementById("spinner");
    var modal = document.getElementById("myModal");
    var title = document.getElementById("myModalTitle");
    var icon = document.getElementById("icon-success");
    var messageSuccess = document.getElementById("message-success");
    var messageError = document.getElementById("message-error");
    var cerrar = document.getElementById("cerrar");

    function finalizar(){
		window.location.href = "/cliente/"+"<?php echo $id_venta ?>"+"/detalleVenta";
	}

    const config = {
      targetIFrame: "#conektaIframeContainer",
      checkoutRequestId: "<?php echo $token  ?>",
      publicKey: "<?php echo env('CONEKTA_PUBLIC_KEY') ?>",
      locale: "es",
    };

    const options = {
        styles: {
            colors: {
                primary: "#1a1c1f"
            },
            inputType: 'line'
        }
    };

    const callbacks = {
        onCreateTokenSucceeded: function(token) {
            let params = {"id_token" : token.id};
            let url="/pagos/"+"<?php echo $id_venta ?>"+"/paymentCard";
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            spinner.style.display = "flex";

            $.post(url,params,function(data){
                title.innerHTML = "¡Gracias por su compra!";
                icon.style.display = "block";
                messageSuccess.innerHTML = 
                    "<h4 style='text-align: center; font-size: 20px;'>"+
                        "<b>Su pago fue realizado satisfactoriamente"+
                        "<br>"+
                        "Gracias por su preferencia</b>"+
                    "</h4>";
                cerrar.setAttribute("onclick","finalizar()");
		        modal.style.display = "block";
            }).fail(function(data) {
                messageError.innerHTML = data.responseJSON;
		        modal.style.display = "block";
            });
        },
        onCreateTokenError: function(error) {
            messageError.innerHTML = error.data.message_to_purchaser;
            modal.style.display = "block";
        }
    };

    window.ConektaCheckoutComponents.Card({
        config,
        options,
        callbacks,
        allowTokenization: true, 
    });
</script>
@endif

@endsection