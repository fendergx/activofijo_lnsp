<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color_af extends Model
{
	protected $table='colores_af';
	protected $primaryKey='id_color';

	protected $fillable = ['color_af'];
    //se usa para cuando la tabla no tiene TimeStamp (created_at updated_at)
	public $timestamps = false;
}
