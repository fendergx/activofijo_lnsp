<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reactivo extends Model
{
    protected $table='reactivos';
    protected $primaryKey='id_reactivo';

    protected $fillable = ['nombre_reactivo','precio_reactivo','presentacion',
    'unidad_base','unidad_medida'];

    public $timestamps = true;
}
