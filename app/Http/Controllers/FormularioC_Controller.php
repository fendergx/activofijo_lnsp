<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioC_Controller extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	} 
}
