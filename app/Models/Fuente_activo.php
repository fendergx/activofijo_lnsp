<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fuente_activo extends Model
{
    protected $table='fuentes_af';
	protected $primaryKey='id_fuente';

	protected $fillable = ['nombre_fuente'];

	public $timestamps = true;
}
