<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoSolicitudAF extends Model
{
	protected $table='estado_solicitudes_af';
	protected $primaryKey='id_estado_sol';

	protected $fillable = ['estado_sol'];

    //se usa para cuando la tabla no tiene TimeStamp (created_at updated_at)
	public $timestamps = false;
	
}
