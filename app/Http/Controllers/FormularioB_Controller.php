<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Coordinacion;
use App\Models\ClaseMovimiento;
use App\Models\ActivoFijo;

use PDF;
use Carbon\Carbon;


class FormularioB_Controller extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	} 
	
    //
	public function formulario(){
		$coordinaciones = Coordinacion::all();
		$clases = ClaseMovimiento::all();
		return view('formularios.formulario_b',[
			'coordinaciones'=>$coordinaciones,
			'clases'=>$clases
		]);
	}

	public function reporte(){
		$data = ActivoFijo::all();
		error_reporting(E_ALL ^ E_DEPRECATED);
		$pdf = PDF::loadView('reportes.reporte_b',compact('data'));
		$pdf->setPaper('letter', 'portrait');
		return $pdf->stream('pdf-'.date('d-m-Y').'.pdf',array('Attachment'=>0));;
	}

	public function store(){
		return back();
	}
}
