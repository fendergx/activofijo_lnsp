<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClaseMovimiento extends Model
{
	protected $table='clase_movimientos';
	protected $primaryKey='id_clase_mov';

	protected $fillable = ['clase_movimiento'];

    //se usa para cuando la tabla no tiene TimeStamp (created_at updated_at)
	public $timestamps = false;

}
