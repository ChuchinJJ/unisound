<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Cupon extends Component
{
    public $idProductos, $productos, $searchProductos;
    public $search = '';

    public function render()
    {   
        return view('livewire.cupon');
    }

    public function mount($oldProductos)
    {
        $this->searchProductos = Producto::where('deleted_at', null)->get();
        $this->productos = collect();
        $this->idProductos = [];
        foreach($oldProductos as $oldProducto){
            $this->idProductos[$oldProducto->id_producto] = $oldProducto->id_producto;
        }
        $this->productos = Producto::whereIn('id_producto', $this->idProductos)->get();
        $this->searchProductos = $this->searchProductos->diff($this->productos);
    }

    public function search()
    {
        $this->searchProductos = Producto::where('deleted_at', null)->where('nombre', 'like', '%'.$this->search.'%')->get();
        $this->searchProductos = $this->searchProductos->diff($this->productos);
    }

    public function addProducto($id)
    {
        $this->idProductos[Producto::find($id)->id_producto] = Producto::find($id)->id_producto;
        $this->productos = Producto::whereIn('id_producto', $this->idProductos)->get();
        $this->searchProductos = $this->searchProductos->diff($this->productos);
    }

    public function removeProducto($id)
    {
        unset($this->idProductos[Producto::find($id)->id_producto]);
        $this->productos = Producto::whereIn('id_producto', $this->idProductos)->get();
        $this->searchProductos = Producto::where('deleted_at', null)->where('nombre', 'like', '%'.$this->search.'%')->get();
        $this->searchProductos = $this->searchProductos->diff($this->productos);
    }
}
