<?php

namespace Comunal\Http\Controllers;

use Illuminate\Http\Request;

use Comunal\Http\Requests;
use DB, Redirect, Validator;
use Comunal\Estados;
use Comunal\Municipios;
use Comunal\Parroquias;
use Comunal\Censo;
use Comunal\Censos_academico_laboral;
use Comunal\Censos_comunidad;

class ReporteController extends Controller
{

    public function index()
    {
        $censo = DB::table('censos')
            ->select('*')
            ->get(); 

        $grupo_familials = DB::table('censos')
            ->leftJoin('grupo_familials', 'censos.id', '=', 'grupo_familials.censos_id')
            ->select('*')
            ->get();  

$censos =  array_merge($censo, $grupo_familials);

        return view('reporte.consult',compact('censos'));

    }





    public function socio_economico($id=null)
    {

    $censos = DB::table('censos')
            ->join('censos_academico_laborals', 'censos.id', '=', 'censos_academico_laborals.censos_id')
            ->join('censos_comunidads', 'censos.id', '=', 'censos_comunidads.censos_id')
            ->select('*')
            ->where('censos.id',$id)
            ->first();

    $grupofamiliars = DB::table('grupo_familials')
                ->select('*')
                ->where('censos_id',$id)
                ->get();
            
     $clasif_ingresos= json_decode($censos->clasif_ingreso, TRUE);

        $selectedEstado =    array('id',$censos->estado_id);
        $selectedMunicipio = array('id',$censos->municipios_id);
        $selectedParroquia = array('id',$censos->parroquia_id);

        $estadotipo = DB::table('estados')->where('id',$censos->estado_id)->lists('estado', 'id');
        $munictipo = DB::table('municipios')->where('id',$censos->municipios_id )->lists('municipio', 'id');
        $parrotipo = DB::table('parroquias')->where('id',$censos->parroquia_id)->lists('parroquia', 'id');


$resultados = array_merge($estadotipo, $munictipo, $parrotipo);

    return view('reporte.socioeconomico', compact('censos','resultados','grupofamiliars'));

    }


   public function constanciaderesidencia($id=null){

        $censos = DB::table('censos')
            ->join('censos_academico_laborals', 'censos.id', '=', 'censos_academico_laborals.censos_id')
            ->join('censos_comunidads', 'censos.id', '=', 'censos_comunidads.censos_id')
            ->select('*')
            ->where('censos.id',$id)
            ->first();

    return view('reporte.constanciaderesidencia',compact('censos'));

   }


    public function aval($id=null){

        $censos = DB::table('censos')
            ->join('censos_academico_laborals', 'censos.id', '=', 'censos_academico_laborals.censos_id')
            ->join('censos_comunidads', 'censos.id', '=', 'censos_comunidads.censos_id')
            ->select('*')
            ->where('censos.id',$id)
            ->first();

    return view('reporte.aval',compact('censos'));

   }

    public function declaracionjurado($id=null){

        $censos = DB::table('censos')
            ->join('censos_academico_laborals', 'censos.id', '=', 'censos_academico_laborals.censos_id')
            ->join('censos_comunidads', 'censos.id', '=', 'censos_comunidads.censos_id')
            ->select('*')
            ->where('censos.id',$id)
            ->first();

    return view('reporte.declaracionjurado',compact('censos'));

   }
   
    public function cartabuenaconducta($id=null){

        $censos = DB::table('censos')
            ->join('censos_academico_laborals', 'censos.id', '=', 'censos_academico_laborals.censos_id')
            ->join('censos_comunidads', 'censos.id', '=', 'censos_comunidads.censos_id')
            ->select('*')
            ->where('censos.id',$id)
            ->first();

    return view('reporte.cartabuenaconducta',compact('censos'));

   }


}
