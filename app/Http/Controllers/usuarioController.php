<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;


use App\Models\User;
use App\Models\Coordinacion;
use App\Models\Rol;
use App\Models\Area;

use Illuminate\Support\Facades\Hash;

class usuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    protected $rules =[
        'nombre_usuario' => 'required',
        'password' => 'required',
        'nombres' => 'required',
        'apellidos' => 'required',
    ];

    protected $rules_edit =[
        'nombre_usuario' => 'required',
        'nombres' => 'required',
        'apellidos' => 'required',
    ];

    public function registrar()
    {

        $roles = Rol::all();
        $areas = Area::all();
        $coordinaciones = Coordinacion::all();
        return view('usuario.registrar',['roles' => $roles,'areas' => $areas,'coordinaciones' => $coordinaciones]);
    }

    public function lista()
    {

        $usuarios = User::all();
        return view('usuario.lista',['usuarios' => $usuarios]);
    }

    public function edit($id)
    {
     $usuario = User::findOrFail($id);
     $roles = Rol::all();
     $areas = Area::all();
     $coordinaciones = Coordinacion::all();
     return view('usuario.edit',['usuario' => $usuario,'roles' => $roles,'areas' => $areas,'coordinaciones' => $coordinaciones]);
 }

 public function perfil()
 {
    $usuarios = Auth::user();
    return view('usuario.perfil',['usuarios' => $usuarios]);
}

public function areas($id){
    $areas = DB::table('areas')->where('id_coord', '=', $id)->get();

    return $areas;

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
        }else{
            $usuario = new User();
            $usuario->nombre_usuario = $request->nombre_usuario;
            $usuario->password = Hash::make($request->password);
            $usuario->nombres = $request->nombres;
            $usuario->apellidos = $request->apellidos;
            $usuario->id_coord = $request->id_coord;
            $usuario->id_area = $request->nombre_area;
            $usuario->id_rol = $request->id_rol;
            $usuario->save();
            return redirect()->route('usuario.lista')->with('status', 'Usuario '.$request->nombre_usuario.' registrado existosamente');
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
        $validator = Validator::make($request->all(), $this->rules_edit);
        if ($validator->fails()) {
            Return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else{    
            $usuario = User::findOrFail($id);
            $usuario->nombre_usuario = $request->nombre_usuario;
            $usuario->nombres = $request->nombres;
            $usuario->apellidos = $request->apellidos;
            $usuario->id_coord = $request->id_coord;
            $usuario->id_area = $request->nombre_area;
            $usuario->id_rol = $request->id_rol;
            $usuario->save();
            return response()->json($usuario);
        }
    }


    public function updatePassword(Request $request, $id){
        $usuario = User::findOrFail($id);
        $usuario->password = Hash::make($request->password);
        $usuario->save();
        return response()->json($usuario);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return response()->json($usuario);
    }
}
