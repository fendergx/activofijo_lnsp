<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//modelos

use App\Models\ActivoFijo;
use App\Models\User;
use App\Models\Ubicacion_af;

class apiController extends Controller
{
	public function apiActivos(){
    return datatables()
    ->eloquent(ActivoFijo::query()
			->select([
				'id_af',
        'codigo_af',
        'serie_af',
        'nombre_af',
        'id_ubicacion',
        'persona_responsable'
			])

		)->addColumn('botones','<a href="#" class=" btn btn-info" role="button">Editar</a> <a type="button" class="btn btn-danger text-light" data-toggle="modal" data-target="#modal-eliminar-activo-fijo" data-id="id_af" role="button">Eliminar</a>')
		->rawColumns(['botones'])
    ->toJson();


    //con coordinaciones
    /*$query= DB::table('areas as a')
    ->select('a.id_area','a.nombre_area','c.nombre_coord')
    ->join('coordinaciones as c', 'a.id_coord', '=', 'c.id_coord');*/

    //traer tal cual la tabla
    //$query=App\Area::query()->addColumn('botones','botones');
    //con DB
    //$query= DB::table('areas');
    //return datatables($query)->toJson(); // Datatables::of($query)->make(true);
}

}
