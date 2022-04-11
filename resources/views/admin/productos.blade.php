@extends('admin.container')
@section('contenido')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-3 align-items-center">
          <div class="col-sm-6">
            <h1 class="m-0">Productos</h1>
          </div>
          <div class="col-sm-6 btn-top">
            <a class="btn btn-danger btn-lg" href="/admin/addproducto">Agregar <i class="fa fa-plus"></i></a>
          </div>
        </div>
      </div>
    </div>
    
    @if(session()->has('success'))
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display:block; background-color: #00000085;" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModal">Atención</h5>
                </div>
                <div class="modal-body">
                {{ session('success') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="cerrar()" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function cerrar(){
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>
    @endif

    <div class="content">
        <div class="content-fluid">
            <div class="card">
                <div class="card-slider">
                    <form method="post" action="" id="formulario" class="row m-2">
                        @csrf
                        <div class="search-product me-2 mb-2">
                            <div class="search">
                                <a href="#" class="icon" onclick="searchButtom()"><i class="fa fa-search"></i></a>
                                <input class="form-control" type="search" id="search" value="{{old('nombre')}}" placeholder="Buscar..." name="nombre"/>
                            </div>
                        </div>
                        <div class="filter-select">
                            <div class="product-filter mb-2">
                                <span>Categoría</span>
                                <select class="select-admin" name="categoria" onchange="enviar()" id="categoria">
                                    <option value="">Todas</option>
                                    <option value="1" @if(old('categoria') == "1") selected='selected' @endif>Cuerda</option>
                                    <option value="2" @if(old('categoria') == "2") selected='selected' @endif>Percusión</option>
                                    <option value="3" @if(old('categoria') == "3") selected='selected' @endif>Atriles y soporte</option>
                                    <option value="4" @if(old('categoria') == "4") selected='selected' @endif>Audio</option>
                                    <option value="5" @if(old('categoria') == "5") selected='selected' @endif>Iluminación</option>
                                    <option value="6" @if(old('categoria') == "6") selected='selected' @endif>Adaptadores</option>
                                    <option value="7" @if(old('categoria') == "7") selected='selected' @endif>Accesorios</option>
                                </select>
                            </div>
                        </div>
                        <div class="filter-select">
                            <div class="product-filter">
                                <span>Ordenar</span>
                                <select class="select-admin" name="order" onchange="enviar()" id="order">
                                    <option value="defecto" @if(old('order') == "defecto") selected='selected' @endif>Defecto</option>
                                    <option value="nombre-desc" @if(old('order') == "nombre") selected='selected' @endif>Nombre: A-Z</option>
                                    <option value="nombre-desc" @if(old('order') == "nombre-desc") selected='selected' @endif>Nombre: Z-A</option>
                                    <option value="precio-desc" @if(old('order') == "precio-desc") selected='selected' @endif>Precio: bajo a alto</option>
                                    <option value="precio" @if(old('order') == "precio") selected='selected' @endif>Precio: alto a bajo</option>
                                    <option value="rating" @if(old('order') == "rating") selected='selected' @endif>Calificación: alto a bajo</option>
                                    <option value="rating-desc" @if(old('order') == "rating-desc") selected='selected' @endif>Calificación: bajo a alto</option>>
                                </select>
                            </div>
                        </div>
                    </form>
            
                    <div class="container-table">
                        <table style="border-right: 3px solid white; border-left: 3px solid white;" class="table" width="100%">
                            <thead>
                                <tr>
                                    <th colspan="2">#</th>
                                    <th>Nombre</th>
                                    <th>Categoría</th>
                                    <th>Valoración</th>
                                    <th>Activo</th>
                                    <th>Detalles</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($productos as $producto)
                                @php
                                    $mis_colores = $colores->whereIn('id_producto', $producto->id_producto);
                                    $mis_valoraciones = $valoraciones->whereIn('id_producto', $producto->id_producto);
                                @endphp
                                <tr>
                                    <td class="imagen-td"><img src="/storage/img/products/{{ $producto->imagen1 }}" width="50%" alt=""></td>
                                    <td data-label="Id">{{ $producto->id_producto }}</td>
                                    <td data-label="Nombre">{{ $producto->nombre }}</td>
                                    <td data-label="Categoría">
                                        @if($producto->id_categoria == 1)
                                            Cuerda
                                        @elseif($producto->id_categoria == 2)
                                            Percusión
                                        @elseif($producto->id_categoria == 3)
                                            Atriles y soporte
                                        @elseif($producto->id_categoria == 4)
                                            Audio
                                        @elseif($producto->id_categoria == 5)
                                            Iluminación
                                        @elseif($producto->id_categoria == 6)
                                            Adaptadores
                                        @elseif($producto->id_categoria == 7)
                                            Accesorios
                                        @endif
                                    </td>
                                    <td data-label="Valoraciones" class="woocommerce star-td">
                                        @if($mis_valoraciones->first() != null)
                                        <ul class="products">
                                            <li class="product align-star">
                                                <div class="star-rating" role="img" aria-label="Valorado en {{$mis_valoraciones->first()->valoracion}} de 5" style="line-height: 1rem;">
                                                    <span style="width:{{$mis_valoraciones->first()->valoracion*20}}%">
                                                        Valorado en <strong class="rating">{{$mis_valoraciones->first()->valoracion}}</strong>
                                                         de 5
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                        @else
                                        <p>Sin valoraciones</p>
                                        @endif
                                    </td>
                                    <td data-label="Activo" class="pagado">
                                        @if($producto->deleted_at != null)
                                            <i class="circle-pagado venta-no-pagado">
                                                <svg style="width:13px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="#ffff">
                                                    <path d="M376.6 427.5c11.31 13.58 9.484 33.75-4.094 45.06c-5.984 4.984-13.25 7.422-20.47 7.422c-9.172 0-18.27-3.922-24.59-11.52L192 305.1l-135.4 162.5c-6.328 7.594-15.42 11.52-24.59 11.52c-7.219 0-14.48-2.438-20.47-7.422c-13.58-11.31-15.41-31.48-4.094-45.06l142.9-171.5L7.422 84.5C-3.891 70.92-2.063 50.75 11.52 39.44c13.56-11.34 33.73-9.516 45.06 4.094L192 206l135.4-162.5c11.3-13.58 31.48-15.42 45.06-4.094c13.58 11.31 15.41 31.48 4.094 45.06l-142.9 171.5L376.6 427.5z"/>
                                                </svg>
                                            </i>
                                        @else
                                            <i class="fa fa-check circle-pagado venta-pagado"></i>
                                        @endif
                                    </td>
                                    <td data-label="Detalles">
                                        <i id="icono{{ $producto->id_producto }}" class="fa fa-solid fa-angle-down icono-arrow" role="button" data-bs-toggle="collapse" href="#collapse{{ $producto->id_producto }}" aria-controls="collapse{{ $producto->id_producto }}" aria-expanded="false"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="collapse " id="collapse{{ $producto->id_producto }}" colspan="7">
                                        <div class="row">
                                            <div class="col-md-2 mb-2 pl-1 img-collapse">
                                                <img src="/storage/img/products/{{ $producto->imagen1 }}" width="100%" alt="{{ $producto->imagen1 }}" id="imagen1-{{ $producto->id_producto }}">
                                                @php $count=1; @endphp
                                                @if($producto->imagen2 != null)
                                                    <img src="/storage/img/products/{{ $producto->imagen2 }}" style="display:none" width="100%" alt="{{ $producto->imagen2 }}" id="imagen2-{{ $producto->id_producto }}">
                                                    @php $count++; @endphp
                                                @endif
                                                @if($producto->imagen3 != null)
                                                    <img src="/storage/img/products/{{ $producto->imagen3 }}" style="display:none" width="100%" alt="{{ $producto->imagen3 }}" id="imagen3-{{ $producto->id_producto }}">
                                                    @php $count++; @endphp
                                                @endif
                                                @if($producto->imagen4 != null)
                                                    <img src="/storage/img/products/{{ $producto->imagen4 }}" style="display:none" width="100%" alt="{{ $producto->imagen4 }}" id="imagen4-{{ $producto->id_producto }}">
                                                    @php $count++; @endphp
                                                @endif
                                                @if($producto->imagen5 != null)
                                                    <img src="/storage/img/products/{{ $producto->imagen5 }}" style="display:none" width="100%" alt="{{ $producto->imagen5 }}" id="imagen5-{{ $producto->id_producto }}">
                                                    @php $count++; @endphp
                                                @endif
                                                <input type="hidden" value="1" id="img-selected-{{ $producto->id_producto }}">
                                                @if($count != 1)
                                                <div class="img-product-detail">
                                                    <i class="fa fa-long-arrow-alt-left" id="left-{{ $producto->id_producto }}"></i>
                                                    <span>
                                                        <div id="selected-text-{{ $producto->id_producto }}" style="margin-right: 4px;">1</div>
                                                        de {{ $count }}
                                                    </span>
                                                    <i class="fa fa-long-arrow-alt-right" id="right-{{ $producto->id_producto }}"></i>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="col-md-10 row product-detail mb-2 pl-1">
                                                <div class="col-md-12">
                                                    <label for="desc_general">Descripción general</label>
                                                    <div class="form-control scroll">{{ $producto->descripcion_general }}</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="desc_detallada">Descripción detallada</label>
                                                    <div class="form-control scroll">{{ $producto->descripcion_detallada }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pr-3 pl-1">
                                                <div class="card p-2">
                                                    <div class="row product-detail justify-content-center">
                                                        @php
                                                            $nofirst = false;
                                                        @endphp
                                                        @foreach($mis_colores as $color)
                                                            @if(!$loop->first)
                                                            <div class="col-md-12">
                                                                <hr>
                                                            </div>
                                                            @endif
                                                            <div class="col-md-5">
                                                                <label for="color" required>Color</label>
                                                                <div class="form-control">{{ $color->color }}</div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label for="precio">Precio</label>
                                                                <div class="form-control">${{ $color->precio }}</div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label for="cantidad">Cantidad</label>
                                                                <div class="form-control">{{ $color->cantidad }}</div>
                                                            </div>
                                                            <div class="col-md-1 aling-circle">
                                                                <i class="square-color" style="background-color: {{ $color->rgb }}"></i>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pr-2 pl-1 product-detail-controls">
                                            <div>
                                                @if($producto->deleted_at == null)
                                                    <a class="btn btn-outline-danger" href="/admin/producto/{{ $producto->id_producto }}/delete">Eliminar<i class="fa fa-trash"></i></a>
                                                @else
                                                    <a class="btn btn-outline-danger" href="/admin/producto/{{ $producto->id_producto }}/restore">Restablecer<i class="fa fa-trash-restore"></i></a>
                                                @endif
                                            </div>
                                            <div>
                                                <a class="btn btn-danger" href="/admin/producto/{{ $producto->id_producto }}/edit">Editar<i class="fa fa-edit"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <script>
                                    $('#collapse{{ $producto->id_producto }}').on('hidden.bs.collapse', function () {
                                        $('#icono{{ $producto->id_producto }}').addClass('fa-angle-down');
                                        $('#icono{{ $producto->id_producto }}').removeClass('fa-angle-up');
                                    });
                                    $('#collapse{{ $producto->id_producto }}').on('shown.bs.collapse', function () {
                                        $('#icono{{ $producto->id_producto }}').addClass('fa-angle-up');
                                        $('#icono{{ $producto->id_producto }}').removeClass('fa-angle-down');
                                    });

                                    var count{{ $producto->id_producto }} = 1;
                                    if("{{ $producto->imagen2 }}" != ""){
                                        count{{ $producto->id_producto }} ++;
                                    }
                                    if("{{ $producto->imagen3 }}" != ""){
                                        count{{ $producto->id_producto }} ++;
                                    }
                                    if("{{ $producto->imagen4 }}" != ""){
                                        count{{ $producto->id_producto }} ++;
                                    }
                                    if("{{ $producto->imagen5 }}" != ""){
                                        count{{ $producto->id_producto }} ++;
                                    }

                                    if({{ $count }} != 1){
                                        document.getElementById("left-{{ $producto->id_producto }}").addEventListener("click", function(e) {
                                            var selected = $('#img-selected-{{ $producto->id_producto }}').val();
                                            if(parseInt(selected) != 1){
                                                var anterior = parseInt(selected)-1;
                                            }else{
                                                var anterior = count{{ $producto->id_producto }};
                                            }
                                            $('#imagen'+anterior+'-{{ $producto->id_producto }}').css('display', 'block');
                                            if(count{{ $producto->id_producto }} != 1){
                                                $('#imagen'+selected+'-{{ $producto->id_producto }}').css('display', 'none');
                                            }
                                            $('#img-selected-{{ $producto->id_producto }}').val(anterior);
                                            $('#selected-text-{{ $producto->id_producto }}').text(anterior);
                                        });
                                        document.getElementById("right-{{ $producto->id_producto }}").addEventListener("click", function(e) {
                                            var selected = $('#img-selected-{{ $producto->id_producto }}').val();
                                            if(parseInt(selected)<count{{ $producto->id_producto }}){
                                                var siguiente = parseInt(selected)+1;   
                                            }else{
                                                var siguiente = 1;
                                            }
                                            $('#imagen'+siguiente+'-{{ $producto->id_producto }}').css('display', 'block');
                                            if(count{{ $producto->id_producto }} != 1){
                                                $('#imagen'+selected+'-{{ $producto->id_producto }}').css('display', 'none');
                                            }
                                            $('#img-selected-{{ $producto->id_producto }}').val(siguiente);
                                            $('#selected-text-{{ $producto->id_producto }}').text(siguiente);
                                        });
                                    }
                                </script>
                                @empty
                                <tr>
                                    <td colspan="7">
                                        <div class="no-products">
                                            <p>Lo sentimos no se encontraron productos</p>
                                            <i class="fa fa-frown"></i>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if(count($productos) > 0)
                        <div class="pagination-products">
                            <div class="title-pagination">
                                <span>{{ $productos->firstItem() }} - {{ $productos->lastItem() }} de {{ $productos->total() }}</span>
                            </div>
                            <div class="controls-pagination">
                                <a @if(!$productos->onFirstPage()) href="?page=1" @endif class="doble-arrow-left @if($productos->onFirstPage()) no-control @endif"></a>
                                <a @if(!$productos->onFirstPage()) href="{{ $productos->previousPageUrl() }}" @endif class="arrow-left @if($productos->onFirstPage()) no-control @endif"></a>
                                <a @if($productos->currentPage() != $productos->lastPage()) href="{{ $productos->nextPageUrl() }}" @endif class="arrow-right @if($productos->currentPage() == $productos->lastPage()) no-control @endif"></a>
                                <a @if($productos->currentPage() != $productos->lastPage()) href="{{ $productos->url($productos->lastPage()) }}" @endif class="doble-arrow-right @if($productos->currentPage() == $productos->lastPage()) no-control @endif"></a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('productos').classList.add('active');
    
    function enviar(){
		document.getElementById("formulario").submit();
	}

    function searchButtom(){
        document.getElementById("categoria").value = "";
        enviar();
    }

    const search = document.getElementById("search");
    search.addEventListener("keypress", function onEvent(event) {
        if (event.key === "Enter") {
            document.getElementById("categoria").value = "";
            enviar();
        }
    });
</script>
@endsection