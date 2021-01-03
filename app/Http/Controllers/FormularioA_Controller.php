<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Coordinacion;
use App\Models\ClaseMovimiento;
use App\Models\ActivoFijo;

class FormularioA_Controller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    protected $reglas =[
        'id_coord' => 'required',
        'nombre_area' => 'required',
        'nombre_area_2' => 'required',
        'fecha' => 'required',
        'id_clase' => 'required',
        'id_activo' => 'required',
    ];


    //
    public function formulario(){
    	$coordinaciones = Coordinacion::all();
    	$clases = ClaseMovimiento::all();
    	return view('formularios.formulario_a',[
    		'coordinaciones'=>$coordinaciones,
    		'clases'=>$clases
    	]);
    }

    public function store(){

        $validator = Validator::make($request->all(), $this->reglas);
        if ($validator->fails()) {
            Return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {

        }
    }
}
