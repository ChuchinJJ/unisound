<div class="modal" id="payments" tabindex="-1" role="dialog" aria-labelledby="payments" style="display:none; background-color: #00000085; z-index: 999999;" aria-hidden="false">
  <div class="modal-dialog modal-dialog-centered" role="document" style="height: 100%;">
    <div class="modal-content"  style="max-height: 95%;">
      <div class="modal-header">
        <h5 class="modal-title">Selecciona el método de pago</h5>
        <button type="button" class="close" data-dismiss="modal" style="padding: 5px 5px 5px 8px;margin: 0px;opacity: 1;"
            aria-label="Close" onclick="cerrarPaymentModal()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow: auto;">
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h4><b>Tarjeta de crédito y débito</b></h4>
                    <p>Pagos seguros y rápidos con cualquiera de tus tarjetas.</p>
                    <br>
                    <div class="row" style="margin-right: 0px">
                        <div class="col-md-6">
                            <a href="/pagos/{{$venta->id_venta}}/card" class="card-link">Pagar con tarjeta</a>
                        </div>
                        <div class="col-md-6 row justify-content-end">
                            <i class="fa fa-cc-mastercard col-auto" style="font-size: 35px;"></i>
                            <i class="fa fa-cc-visa col-auto" style="font-size: 35px;"></i>
                            <i class="fa fa-cc-amex col-auto" style="font-size: 35px;"></i>
                        </div>
                    <div>
                </li>
                <li class="list-group-item">
                    <h4><b>Pago en efectivo</b></h4>
                    <p>Realiza tu pago en +19,000 sucursales OXXO.</p>
                    <br>
                    <div class="row" style="margin-right: 0px">
                        <div class="col-md-6">
                            <a href="/pagos/{{$venta->id_venta}}/cash" class="card-link">Pagar con efectivo</a>
                        </div>
                        <div class="col-md-6 row justify-content-end">
                            <img src="/img/oxxo.png" alt="OXXO" style="height: 30px;width: 80px;">
                        </div>
                    <div>
                </li>
                <li class="list-group-item">
                    <h4><b>Transferencia Interbancaria</b></h4>
                    <p>Genera tu pedido y utiliza la CLABE que te proporcionaremos para realizar tu pago.</p>
                    <br>
                    <div class="row" style="margin-right: 0px">
                        <div class="col-md-6">
                            <a href="/pagos/{{$venta->id_venta}}/transfer" class="card-link">Pagar con transferencia</a>
                        </div>
                        <div class="col-md-6 row justify-content-end">
                            <img src="/img/spei.png" alt="SPEI" style="height: 20px;width: 80px;">
                        </div>
                    <div>
                </li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    function abrirPaymentModal(){
        var modal = document.getElementById("payments");
		modal.style.display = "block";
    }

	function cerrarPaymentModal(){
		var modal = document.getElementById("payments");
		modal.style.display = "none";
	}
</script>
