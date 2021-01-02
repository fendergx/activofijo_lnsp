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
    	return back();
    }
}
