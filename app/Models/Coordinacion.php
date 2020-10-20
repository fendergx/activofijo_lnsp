<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model
{
    protected $table='coordinaciones';
    protected $primaryKey='id_coord';

    protected $fillable = ['nombre_coord'];
    //se usa para cuando la tabla no tiene TimeStamp (created_at updated_at)
    public $timestamps = false;
}
