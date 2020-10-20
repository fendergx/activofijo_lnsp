<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Coordinacion;
use Validator;
use Response;

class CoordinacionController extends Controller
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
    

    protected $rules =['nombre_coord' => 'required|min:2|max:128|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ .,# ]+$/i'];

    public function index()
    {
        //
        $coordinaciones = Coordinacion::all();
        return view('coordinacion.index', ['coordinaciones' => $coordinaciones]);
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
            $coordinacion = new Coordinacion();
            $coordinacion->nombre_coord = $request->nombre_coord;
            $coordinacion->save();
            return response()->json($coordinacion);
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
            $coordinacion = Coordinacion::findOrFail($id);
            $coordinacion->nombre_coord = $request->nombre_coord;
            $coordinacion->save();
            return response()->json($coordinacion);
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
        $coordinacion = Coordinacion::findOrFail($id);
        $coordinacion->delete();
        return response()->json($coordinacion);
    
    }
}
