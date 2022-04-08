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
}
