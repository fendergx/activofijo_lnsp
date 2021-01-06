<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ActivoFijoExport;
use Illuminate\Support\Facades\Auth;

class ExcelController extends Controller
{
	public function exportarExcel(){
		if(Auth::user()->id_rol == 2){
			return Excel::download(new ActivoFijoExport, 'activos_fijos.xlsx');
		}else{
			return abort(403);
		}
	}
}
