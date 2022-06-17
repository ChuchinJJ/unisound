<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;
    protected $table = 'notificaciones';
    public $primaryKey = 'id_notificacion';
    public $timestamps = false;
    protected $dates = ['fecha'];
}
