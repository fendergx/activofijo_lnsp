<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Departamento;

class Cliente_preparaduria extends Model
{
    protected $table='clientes_preparaduria';
	protected $primaryKey='id_cliente';

	protected $fillable = ['nombre_cliente','id_dep'];

	public $timestamps = true;

	public function departamento(){
        return $this->belongsTo(Departamento::class, 'id_dep','id_dep');
    }
}
