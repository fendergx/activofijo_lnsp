<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
	protected $table='regiones';
	protected $primaryKey='id_region';

	protected $fillable = ['region'];

    //se usa para cuando la tabla no tiene TimeStamp (created_at updated_at)
	public $timestamps = true;
	
}
