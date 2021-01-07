<?php

namespace App\Models;

//uso de la libreria Model
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
	//nombre de la tabla
	protected $table='areas';
	//llave primaria de la tabla (si existe)
	protected $primaryKey='id_area';

	//atributos de la tabla
	protected $fillable = ['nombre_coord','id_coord'];

    //definición si existen timestamp en la tabla (created_at updated_at)
	public $timestamps = false;

	//funciones de relación con otras tablas
	public function coordinacion(){
		return $this->belongsTo(Coordinacion::class, 'id_coord','id_coord');
	}
}
