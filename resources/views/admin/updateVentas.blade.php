@extends('admin.container')
@section('contenido')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
            <h1 class="m-0">Editar venta</h1>
        </div>
      </div>
    </div>

    <div class="content">
        <div class="content-fluid">
            <form method="post" action="" id="formulario" class="update-sale">
                @csrf
                <div class="card-deck">
                    <div class="card">
                        <div class="card-venta">
                            <div class="flex justify-content-between">
                                <h5><b>Status</b></h5>
                                <i id="circle-status" class="circle-status circle-{{ $venta->status }}"></i>
                            </div>
                            <select class="form-control" name="status" onchange="cambiarCirculo(this.value)">
                                <option value="Pedido" @if($venta->status == 'Pedido') selected='selected' @endif>Pedido</option>
                                <option value="Entregado" @if($venta->status == 'Entregado') selected='selected' @endif>Entregado</option>
                                <option value="Cancelado"@if($venta->status == 'Cancelado') selected='selected' @endif>Cancelado</option>
                            </select>
                            <small>Seleccione el estado de la venta</small>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-venta">
                        <div class="flex justify-content-between">
                                <h5><b>Pagado</b></h5>
                                <div id="circle-pagado">
                                    @if($venta->pagado == 0)
                                        <i class="circle-pagado venta-no-pagado">
                                            <svg style="width:13px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="#ffff">
                                                <path d="M376.6 427.5c11.31 13.58 9.484 33.75-4.094 45.06c-5.984 4.984-13.25 7.422-20.47 7.422c-9.172 0-18.27-3.922-24.59-11.52L192 305.1l-135.4 162.5c-6.328 7.594-15.42 11.52-24.59 11.52c-7.219 0-14.48-2.438-20.47-7.422c-13.58-11.31-15.41-31.48-4.094-45.06l142.9-171.5L7.422 84.5C-3.891 70.92-2.063 50.75 11.52 39.44c13.56-11.34 33.73-9.516 45.06 4.094L192 206l135.4-162.5c11.3-13.58 31.48-15.42 45.06-4.094c13.58 11.31 15.41 31.48 4.094 45.06l-142.9 171.5L376.6 427.5z"/>
                                            </svg>
                                        </i>
                                    @else
                                        <i class="fa fa-check circle-pagado venta-pagado"></i>
                                    @endif
                                </div>
                            </div>
                            <select class="form-control" name="pagado" onchange="cambiarPagado(this.value)">
                                <option value="1" @if($venta->pagado == 1) selected='selected' @endif>Si</option>
                                <option value="0" @if($venta->pagado == 0) selected='selected' @endif>No</option>
                            </select>
                            <small>Seleccione si la venta ya fue pagada</small>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-venta">
                        <h5><b>Detalles de pago:</b></h5>
                        <textarea name="detalles" rows="4" name="desc_detallada" class="form-control" placeholder="Detalles de pago">{{ $venta->detalles }}</textarea>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" id="submit_btn" class="btn btn-danger btn-lg btn-save">Guardar <i class="fa fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('ventas').classList.add('active');
    
    function cambiarCirculo(valor){
		document.getElementById("circle-status").className = "circle-status circle-"+valor;
	}

    function cambiarPagado(valor){
        var pagado = document.getElementById("circle-pagado");
        if(valor == 0){
            pagado.innerHTML = '<i class="circle-pagado venta-no-pagado"><svg style="width:13px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="#ffff">'+
                '<path d="M376.6 427.5c11.31 13.58 9.484 33.75-4.094 45.06c-5.984 4.984-13.25 7.422-20.47 7.422c-9.172 0-18.27-3.922-24.59-11.52L192 305.1l-135.4 162.5c-6.328 7.594-15.42 11.52-24.59 11.52c-7.219 0-14.48-2.438-20.47-7.422c-13.58-11.31-15.41-31.48-4.094-45.06l142.9-171.5L7.422 84.5C-3.891 70.92-2.063 50.75 11.52 39.44c13.56-11.34 33.73-9.516 45.06 4.094L192 206l135.4-162.5c11.3-13.58 31.48-15.42 45.06-4.094c13.58 11.31 15.41 31.48 4.094 45.06l-142.9 171.5L376.6 427.5z"/>'+
                '</svg></i>';
        }else{
            pagado.innerHTML = '<i class="fa fa-check circle-pagado venta-pagado"></i>';
        }
	}
</script>
@endsection