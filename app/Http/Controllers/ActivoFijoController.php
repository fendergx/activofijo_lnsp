<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivoFijoController extends Controller
{
    //función para obtener las áreas según la coordinación escogida
	public function getAreas(Request $request){
		$dependent = $request->get('dependent');
		$data = Area::where($request->select, $request->value)->get();
		$output = '<option value="" selected>Seleccionar Área</option>';
		foreach($data as $row){
			$output .= '<option value="'.$row->id_area.'">'.$row->nombre_area.'</option>';
		}
		echo $output;
	}
}
