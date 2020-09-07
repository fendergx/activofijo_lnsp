<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion_af extends Model
{
    protected $table='ubicaciones_af';
    protected $primaryKey='id_ubicacion';

    protected $fillable = ['ubicacion_af'];
    public $timestamps = true;

}
