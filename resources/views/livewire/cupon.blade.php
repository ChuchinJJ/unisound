<div class="card">
    <div class="card-slider">
        <h4>Productos</h4>
        <div class="row">
            <div class="col-md-6 mb-4 product-cupon">
                <label>Productos seleccionados</label>
                <ul id="list-products">
                    @forelse($productos as $producto)
                    <li>
                        <img src="/storage/img/products/{{ $producto->imagen1 }}"/>
                        <p>{{ $producto->nombre }}</p>
                        <a class="btn btn-danger" wire:click="removeProducto({{ $producto->id_producto }})" onclick="eliminarProducto()">
                            <i class="fa fa-trash"></i>
                        </a>
                        <input type="hidden" name="producto[]" value="{{ $producto->id_producto }}" >
                    </li>
                    @empty
                    <li>
                        <p>Vacío</p>
                    </li>
                    @endforelse
                </ul>  
            </div>
            <div class="col-md-6 mb-4 product-cupon product-cupon-search">
                <label for="search">Buscar productos</label>
                <br>
                <div class="search-product mb-4">
                    <div class="search">
                        <div class="icon"><i class="fa fa-search"></i></div>
                        <input class="form-control" type="search" id="search" wire:model="search" wire:input="search()" placeholder="Buscar" name="search" autocomplete="off"/>
                    </div>
                </div>
                <ul>
                    @foreach($searchProductos as $searchProducto)
                    <li>
                        <img src="/storage/img/products/{{ $searchProducto->imagen1 }}"/>
                        <p>{{ $searchProducto->nombre }}</p>
                        <a class="btn btn-danger add_producto" wire:click="addProducto({{ $searchProducto->id_producto }})"><i class="fa fa-plus"></i></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
