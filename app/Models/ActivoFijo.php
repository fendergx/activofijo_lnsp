<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Ubicacion_af;
use App\Models\Estado_af;
use App\Models\Color_af;
use App\Models\Fuente_activo;
use App\Models\User;
use App\Models\Coordinacion;
use App\Models\Area;

class ActivoFijo extends Model
{
	protected $table='activos_fijos';
	protected $primaryKey='id_af';

	protected $fillable = [
		'codigo_af','nombre_af','marca_af','modelo_af','serie_af','fecha_adq_af',
		'valor_adq_af','valor_actual_af','fecha_depreciado','descripcion_af','desecha_af','export_af', 'id_coord','id_area',
		'id_ubicacion','id_estado','id_color','id_fuente','persona_responsable'
	];

    //se usa para cuando la tabla no tiene TimeStamp (created_at updated_at)
	public $timestamps = true;

	//llamadas a datos de otras tablas
    public function coordinacion(){
        return $this->belongsTo(Coordinacion::class, 'id_coord','id_coord');
    }

    public function area(){
        return $this->belongsTo(Area::class, 'id_area','id_area');
    }

    public function ubicacion(){
        return $this->belongsTo(Ubicacion_af::class, 'id_ubicacion','id_ubicacion');
    }

    public function estado(){
        return $this->belongsTo(Estado_af::class, 'id_estado','id_estado');
    }

    public function color(){
        return $this->belongsTo(Color_af::class, 'id_color','id_color');
    }

    public function fuente(){
        return $this->belongsTo(Fuente_activo::class, 'id_fuente','id_fuente');
    }

    public function responsable(){
        return $this->belongsTo(User::class, 'persona_responsable','id_usuario');
    }

}
