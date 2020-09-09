<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Response;

use App\Estado_af;



class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.w
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }



    protected $rules =['estado_af' => 'required|min:2|max:128|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ .,# ]+$/i'];

    public function index()
    {
        $estados = Estado_af::all();
        return view('estado.index', ['estados' => $estados]);
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
            $estado = new Estado_af();
            $estado->estado_af = $request->estado_af;
            $estado->save();
            return response()->json($estado);
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
            $estado = Estado_af::findOrFail($id);
            $estado->estado_af = $request->estado_af;
            $estado->save();
            return response()->json($estado);
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
        $estado = Estado_af::findOrFail($id);
        $estado->delete();
        return response()->json($estado);
    }
}
