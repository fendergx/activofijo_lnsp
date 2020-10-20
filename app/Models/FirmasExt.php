<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FirmasExt extends Model
{
	protected $table='firmas_ext';
	protected $primaryKey='id_firm';

	protected $fillable = ['cargo_firm','titulo_firm','nombre_firm_p','apellido_firm_p'];

    //se usa para cuando la tabla no tiene TimeStamp (created_at updated_at)
	public $timestamps = true;
	
}
