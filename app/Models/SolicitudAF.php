<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\EstadoSolicitudAF;
use App\Models\TipoReporte;
use App\Models\User;
use App\Models\ActivoFijo;

class SolicitudAF extends Model
{
	protected $table='solicitudes_af';
	protected $primaryKey='id_solicitud';

	protected $fillable = ['fecha_solicitud','id_estado_sol','id_tipo_rep','id_usuario','id_af'];

    //se usa para cuando la tabla no tiene TimeStamp (created_at updated_at)
	public $timestamps = true;

	//llamadas a datos de otras tablas
	public function estado_solicitud(){
        return $this->belongsTo(EstadoSolicitudAF::class, 'id_estado_sol','id_estado_sol');
    }

    public function tipo_reporte(){
        return $this->belongsTo(EstadoSolicitudAF::class, 'id_tipo_rep','id_tipo_rep');
    }

    public function usuario(){
        return $this->belongsTo(User::class, 'id_usuario','id_usuario');
    }

    public function activo_fijo(){
        return $this->belongsTo(ActivoFijo::class, 'id_af','id_af');
    }
	
}
