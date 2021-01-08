<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudesAFController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	//lista de solicitudes de activo fijo de coordinador
	public function requests(){
		return view('solicitud_activo_fijo.mis_solicitudes');
	}

	//solicitud de activo fijo por parte de coordinador
	public function solicitar(){
		return view('solicitud_activo_fijo.formulario_solicitud_af');
	}

	//lista de solicitudes para el administrador
	public function index(){
		return view('solicitud_activo_fijo.lista_solicitudes');
	}


}
