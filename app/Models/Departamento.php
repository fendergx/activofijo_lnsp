<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Region;

class Departamento extends Model
{
	protected $table='departamentos';
	protected $primaryKey='id_dep';

	protected $fillable = ['nombre_dep','id_region'];

    //se usa para cuando la tabla no tiene TimeStamp (created_at updated_at)
	public $timestamps = false;

	public function region(){
        return $this->belongsTo(Region::class, 'id_region','id_region');
    }
	
}
