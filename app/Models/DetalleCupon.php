<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCupon extends Model
{
    use HasFactory;
    protected $table = 'detalle_cupon';
    public $primaryKey = 'id_detalleCupon';
    public $timestamps = false;
}
