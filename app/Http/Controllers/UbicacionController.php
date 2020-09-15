<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Response;

use App\Ubicacion_af;

class UbicacionController extends Controller
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
    

    protected $rules =['ubicacion_af' => 'required|min:2|max:128|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ .,# ]+$/i'];

    public function index()
    {
        $ubicaciones = Ubicacion_af::all();
        return view('ubicacion.index', ['ubicaciones' => $ubicaciones]);
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
            $ubicacion = new Ubicacion_af();
            $ubicacion->ubicacion_af = $request->ubicacion_af;
            $ubicacion->save();
            return response()->json($ubicacion);
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
            $ubicacion = Ubicacion_af::findOrFail($id);
            $ubicacion->ubicacion_af = $request->ubicacion_af;
            $ubicacion->save();
            return response()->json($ubicacion);
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
        $ubicacion = Ubicacion_af::findOrFail($id);
        $ubicacion->delete();
        return response()->json($ubicacion);
    }
}
