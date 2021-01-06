<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ActivoFijoExport;

class ExcelController extends Controller
{
    public function exportarExcel(){
    	return Excel::download(new ActivoFijoExport, 'activos_fijos.xlsx');
    }
}
