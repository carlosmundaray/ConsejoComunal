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
    public function socio_economico()
    {
    	    $censos = DB::table('censos')
            ->join('censos_academico_laborals', 'censos.id', '=', 'censos_academico_laborals.censos_id')
            ->join('censos_comunidads', 'censos.id', '=', 'censos_comunidads.censos_id')
            ->select('*')
            ->where('censos.id',$id)->first();
 
        return view('reporte.socioeconomico');
    }
}
