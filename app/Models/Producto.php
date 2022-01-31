<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public $primaryKey = 'id_producto';

    public function getCategoria($id){
        $categoria = Categoria::find($id);
        return $categoria->categoria;
    }
}
