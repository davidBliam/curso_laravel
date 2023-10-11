<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    protected $table="alumnos";
    protected $filable=['nombre','apellido','edad','dirrecion'];
    protected $guarded=['id'];
    protected $primaryKey ='id';
}
