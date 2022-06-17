<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    use HasFactory;
    protected $table = 'cupones';
    public $primaryKey = 'id_cupon';
    public $timestamps = false;
    protected $dates = ['fecha_inicio', 'fecha_fin'];

    public function fechaVigente($valor = 0){
        if($valor == 0){
            $cupon = Cupon::where('deleted_at', null)
            ->orderBy('fecha_fin', 'DESC')
            ->first();
        }else{
            $cupon = Cupon::where('deleted_at', null)
            ->orderBy('fecha_fin', 'DESC')
            ->limit(2)
            ->get()
            ->last();
        }

        if($cupon != null){
            return $cupon->fecha_fin;
        }
        return date('Y-m-d');
    }
}
