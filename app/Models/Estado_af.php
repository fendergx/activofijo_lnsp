<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado_af extends Model
{
    protected $table='estados_af';
	protected $primaryKey='id_estado';

	protected $fillable = ['estado_af'];
    //se usa para cuando la tabla no tiene TimeStamp (created_at updated_at)
	public $timestamps = false;
}
