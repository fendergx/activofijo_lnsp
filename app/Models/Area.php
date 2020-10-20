<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table='areas';
    protected $primaryKey='id_area';

    protected $fillable = ['nombre_coord','id_coord'];

    //se usa para cuando la tabla no tiene TimeStamp (created_at updated_at)
    public $timestamps = false;

    public function coordinacion(){
    	return $this->belongsTo(Coordinacion::class, 'id_coord','id_coord');
    }
}
