<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente_preparaduria extends Model
{
    protected $table='clientes_preparaduria';
	protected $primaryKey='id_cliente';

	protected $fillable = ['nombre_cliente'];

	public $timestamps = true;
}
