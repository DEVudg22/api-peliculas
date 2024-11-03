<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    /*Con la siguiente instrucción declaro que todos
    los campos de la base de datos se podrán llenar, es
    decir, ninguno estará protegido*/

    protected $guarded = [];
}
