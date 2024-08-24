<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;
    public $primaryKey = 'id_venta';
    public $timestamps = false;
    protected $dates = ['fecha'];
}
