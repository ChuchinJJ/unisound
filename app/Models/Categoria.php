<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Categoria extends Model
{
    use HasFactory;
    public $primaryKey = 'id_categoria';
}
