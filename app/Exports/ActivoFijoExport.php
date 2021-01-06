<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

use App\Models\ActivoFijo;

class ActivoFijoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	/*si fuera con Eloquent
    	return ActivoFijo::all();
    	return DB::table('activos_fijos')->get(); */
    	$activos = DB::select('select id_af from activos_fijos');
        //pasar a colección el array de activos
    	$coleccionActivos = collect($activos);
    	return $coleccionActivos;
    }
}
