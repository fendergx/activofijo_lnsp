<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Area;
use App\Coordinacion;
use Validator;
use Response;


class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    

    protected $rules =[
        'nombre_area' => 'required|min:2|max:128|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ .,# ]+$/i',
        'id_coord' =>'required',];

    public function index()
    {
        $areas = Area::all();
        $coordinaciones = Coordinacion::all();
        return view('area.index', ['areas' => $areas,'coordinaciones' => $coordinaciones]);
    }

    //función para obtener las áreas según la coordinación escogida
    public function getAreas(Request $request){
        $dependent = $request->get('dependent');
        $data = Area::where($request->select, $request->value)->get();
        $output = '<option value="" selected>Seleccionar Área</option>';
        foreach($data as $row){
            $output .= '<option value="'.$row->id_area.'">'.$row->$dependent.'</option>';
        }
        echo $output;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            Return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $area = new Area();
            $area->nombre_area = $request->nombre_area;
            $area->id_coord = $request->id_coord;
            $area->save();
            return response()->json($area);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            Return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $area = Area::findOrFail($id);
            $area->nombre_area = $request->nombre_area;
            $area->id_coord = $request->id_coord;
            $area->save();
            return response()->json($area);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();
        return response()->json($area);
    }
}
