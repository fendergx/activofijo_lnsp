<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoReporte extends Model
{
	protected $table='tipo_reportes';
	protected $primaryKey='id_tipo_rep';

	protected $fillable = ['nombre_tipo_rep','descrip_tipo_rep','puede_sol'];

    //se usa para cuando la tabla no tiene TimeStamp (created_at updated_at)
	public $timestamps = true;
	
}
