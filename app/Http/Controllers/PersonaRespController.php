<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Persona_reponsable;
use App\Cliente_preparaduria;
use Validator;
use Response;

class PersonaRespController extends Controller
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
        'nombre_persona' => 'required|min:2|max:128|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ .,# ]+$/i',
        'apellido_persona' => 'required|min:2|max:128|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ .,# ]+$/i',
        'dui' => 'required',
        'id_cliente' => 'required',        
    ];

    public function index()
    {
        $personas = Persona_reponsable::all();
        $clientes = Cliente_preparaduria::all();
        return view('persona.index', ['personas' => $personas,'clientes' => $clientes]);
    }

    //función para obtener las personas responsables según el cliente de preparaduría
    public function getPersonas(Request $request){
        $dependent = $request->get('dependent');
        $data = Persona_reponsable::where($request->select, $request->value)->get();
        $output = '<option value="" selected>Selecionar Persona</option>';
        foreach($data as $row){
            $output .= '<option value="'.$row->id_persona.'">'.$row->$dependent.'</option>';
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
            $persona = new Persona_reponsable();
            $persona->nombre_persona = $request->nombre_persona;
            $persona->apellido_persona = $request->apellido_persona;
            $persona->dui = $request->dui;
            $persona->id_cliente = $request->id_cliente;
            $persona->save();
            return response()->json($persona);
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
            $persona = Persona_reponsable::findOrFail($id);
            $persona->nombre_persona = $request->nombre_persona;
            $persona->apellido_persona = $request->apellido_persona;
            $persona->dui = $request->dui;          
            $persona->id_cliente = $request->id_cliente;
            $persona->save();
            return response()->json($persona);
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
        $persona = Persona_reponsable::findOrFail($id);
        $persona->delete();
        return response()->json($persona);
    }
}
