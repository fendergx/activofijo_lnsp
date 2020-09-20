<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Response;

use App\Cliente_preparaduria;

class ClienteController extends Controller
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
    

    protected $rules =['nombre_cliente' => 'required|min:2|max:128|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ .,# ]+$/i'];

    public function index()
    {
        $clientes = Cliente_preparaduria::all();
        return view('cliente.index', ['clientes' => $clientes]);
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
            $cliente = new Cliente_preparaduria();
            $cliente->nombre_cliente = $request->nombre_cliente;
            $cliente->save();
            return response()->json($cliente);
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
            $cliente = Cliente_preparaduria::findOrFail($id);
            $cliente->nombre_cliente = $request->nombre_cliente;
            $cliente->save();
            return response()->json($cliente);
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
        $cliente = Cliente_preparaduria::findOrFail($id);
        $cliente->delete();
        return response()->json($cliente);
    }
}
