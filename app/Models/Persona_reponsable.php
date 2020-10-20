<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona_reponsable extends Model
{
	protected $table='personas_responsables';
	protected $primaryKey='id_persona';

	protected $fillable = ['nombre_persona','apellido_persona','dui','id_cliente'];

	public $timestamps = true;

	public function cliente_preparaduria(){
		return $this->belongsTo(Cliente_preparaduria::class, 'id_cliente','id_cliente');
	}
}
