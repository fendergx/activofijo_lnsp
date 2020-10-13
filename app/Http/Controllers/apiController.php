<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//modelos
use App\Area;
use App\Coordinacion;

class apiController extends Controller
{
	public function apiAreas(){
		return datatables()
		->eloquent(Area::query()
			->select([
				'id_area',
				'nombre_area',
				'id_coord',
			])

		)->addColumn('botones','<a href="#" class="btn btn-primary btn-sm" role="button">Link</a> <a href="#" class="btn btn-primary btn-sm" data-id="id_area" role="button">Link</a>')
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
