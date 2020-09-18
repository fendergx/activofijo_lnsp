<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fuente_activo;
use Validator;
use Response;

class FuenteController extends Controller
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
    

    protected $rules =['nombre_fuente' => 'required|min:2|max:128|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ .,# ]+$/i',
];

    public function index()
    {
        //
        $fuentes = Fuente_activo::all();
        return view('fuente.index', ['fuentes' => $fuentes]);
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
            $fuente = new Fuente_activo();
            $fuente->nombre_fuente = $request->nombre_fuente;
            $fuente->save();
            return response()->json($fuente);
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
            $fuente = Fuente_activo::findOrFail($id);
            $fuente->nombre_fuente = $request->nombre_fuente;
            $fuente->save();
            return response()->json($fuente);
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
        $fuente = Fuente_activo::findOrFail($id);
        $fuente->delete();
        return response()->json($fuente);
    
    }
}
