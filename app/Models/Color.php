<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $table = 'colores';
    public $primaryKey = 'id_color';

    public function getColorByID($id){
        $colores = Color::orderBy('precio','asc')->where('id_producto', $id)->get();;
        return $colores;
    }
}
