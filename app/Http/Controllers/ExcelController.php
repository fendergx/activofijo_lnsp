<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facade\Excel;

class ExcelController extends Controller
{
    public function exportarExcel(){
    	return Excel::download(new )
    }
}
