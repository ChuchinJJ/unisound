<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    use HasFactory;
    protected $table = 'valoraciones';
    public $primaryKey = 'id_valoracion';
    public $timestamps = false;
}