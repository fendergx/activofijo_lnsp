<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reactivo;
use Validator;
use Response;

class ReactivoController extends Controller
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
        'nombre_reactivo' => 'required|min:2|max:128|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ .,# ]+$/i',
        'precio_reactivo'=>'required',
        'presentacion'=>'required',
        'unidad_base'=>'required',
        'unidad_medida'=>'required',];

        public function index()
        { 
            $reactivos = Reactivo::all();
            return view('reactivo.index', ['reactivos' => $reactivos]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $reactivo = new Reactivo();
            $reactivo->nombre_reactivo = $request->nombre_reactivo;
            $reactivo->precio_reactivo = $request->precio_reactivo;
            $reactivo->presentacion = $request->presentacion;
            $reactivo->unidad_base = $request->unidad_base;
            $reactivo->unidad_medida = $request->unidad_medida;
            $reactivo->save();
            return response()->json($reactivo);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reactivo = new Reactivo();
        $reactivo->nombre_reactivo = $request->nombre_reactivo;
        $reactivo->precio_reactivo = $request->precio_reactivo;
        $reactivo->presentacion = $request->presentacion;
        $reactivo->unidad_base = $request->unidad_base;
        $reactivo->unidad_medida = $request->unidad_medida;
        return response()->json($reactivo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            $reactivo = Reactivo::findOrFail($id);
            $reactivo->nombre_reactivo = $request->nombre_reactivo;
            $reactivo->precio_reactivo = $request->precio_reactivo;
            $reactivo->presentacion = $request->presentacion;
            $reactivo->unidad_base = $request->unidad_base;
            $reactivo->unidad_medida = $request->unidad_medida;
            $reactivo->save();
            return response()->json($reactivo);
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
        $reactivo = Reactivo::findOrFail($id);
        $reactivo->delete();
        return response()->json($reactivo);
    }
}
