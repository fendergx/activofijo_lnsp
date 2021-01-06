<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use App\Models\ActivoFijo;
use App\Models\Color_af;
use App\Models\Ubicacion_af;
use App\Models\Estado_af;
use App\Models\Fuente_activo;
use App\Models\User;
use App\Models\Area;
use App\Models\Coordinacion;

class ActivoFijoController extends Controller
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
        //función para obtener las áreas según la coordinación escogida
    public function getTitulosActivos(Request $request){
        $data = ActivoFijo::where('id_af', $request->value)->get();
        $output = '<option value="" selected disabled>Seleccionar Activo Fijo</option>';
        foreach($data as $row){
            $output .= '<option value="'.$row->id_af.'">'.$row->codigo_af.' - '.$row->nombre_af.' ('.$row->serie_af.')'.'</option>';
        }
        echo $output;
    }
    public function index()
    {
        if(Auth::user()->id_rol == 2){
            $activos = ActivoFijo::where('id_coord', '=', 1)->paginate(20);
            return view('ActivoFijo.index',['activos' => $activos]);
        }else{
            return view('errors.403');
        }
    }  

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $Colores = Color_af::all();
        $Ubicaciones = Ubicacion_af::all();
        $Fuentes = Fuente_activo::all();
        $Usuarios = User::all();
        $coordinaciones = Coordinacion::All();
        $areas = Area::All();
        return view('ActivoFijo.registro-af',[
            'Colores' => $Colores,
            'Ubicaciones' => $Ubicaciones,
            'Fuentes' => $Fuentes,
            'Usuarios' => $Usuarios,
            'coordinaciones' => $coordinaciones,
            'areas' => $areas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Activo = new ActivoFijo();
        $Activo->codigo_af = $request->codigoAF;
        $Activo->nombre_af = $request->nombreAF;
        $Activo->marca_af = $request->marcaAF;
        $Activo->modelo_af = $request->modeloAF;
        $Activo->serie_af = $request->serieAF;
        $Activo->fecha_adq_af = $request->fechaAdqAF;
        $Activo->valor_adq_af = $request->valorAdqAF;
        $Activo->valor_actual_af = $request->valorActAF;
        $Activo->descripcion_af = $request->descripcionAF;
        $Activo->desecha_af = false;
        $Activo->export_af = false;
        $Activo->id_coord = $request->coordinacionAF;
        $Activo->id_area = $request->areaAF;
        $Activo->id_ubicacion = $request->ubicacionAF;
        $Activo->id_estado = 1;
        $Activo->id_color = $request->colorAF;
        $Activo->id_fuente = $request->fuenteAF;
        $Activo->persona_responsable = $request->encargadoAF;
        $Activo->save();
            //return $Activo;
            //return response()->json($Activo);
        return View('ActivoFijo.index'); 
        //return back()->withInput();
    }

    public function activos_usuarios(){

        if(Auth::user()->id_rol == 4){
            $coord = Auth::user()->id_coord;
            $activos = ActivoFijo::where('id_coord', '=', $coord)->paginate(20);
            $etiqueta = Coordinacion::where('id_coord', '=', $coord)->pluck('nombre_coord');

            return view('ActivoFijo.lista_activofijo_usuario',[
                'activos' => $activos,
                'etiqueta' => $etiqueta]);

        }else if(Auth::user()->id_rol == 5 || Auth::user()->id_rol == 6){
            $area = Auth::user()->id_area;
            $activos = ActivoFijo::where('id_area', '=', $area)->paginate(20);
            $etiqueta = Area::where('id_area', '=', $area)->pluck('nombre_area');

            return view('ActivoFijo.lista_activofijo_usuario',[
                'activos' => $activos,
                'etiqueta' => $etiqueta]);

        }else{
            return view('errors.403');

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
        $activo = ActivoFijo::where('id_af', $id)->get();
        return view('ActivoFijo.detalle',['activo' => $activo]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
