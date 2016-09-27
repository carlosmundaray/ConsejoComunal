<?php

namespace Comunal\Http\Controllers;

use Illuminate\Http\Request;
use Comunal\Http\Requests;
use Comunal\Http\Requests\StoreCensoRequest;
use Comunal\Http\Requests\EditCensoRequest ;
use Comunal\Http\Requests\GrupoFamiliarStoreRquest;
use DB, Redirect, Validator;
use Comunal\Estados;
use Comunal\Municipios;
use Comunal\Parroquias;
use Comunal\Censo;
use Comunal\Censos_academico_laboral;
use Comunal\Censos_comunidad;
use Comunal\temp_familia_log;



class CensoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $censos = DB::table('censos')
            //->join('censos_academico_laboral', 'censos.censos_id', '=', 'censos_academico_laboral.id')
            //->join('censos_comunidad', 'censos.censos_id', '=', 'censos_comunidad.id')
            ->select('*')
            ->get();    
        return view('censo.consult',compact('censos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $grupofamiliars = DB::table('temp_familia_logs')
            ->select('*')
            ->get();  
        DB::statement("TRUNCATE TABLE temp_familia_logs");
        $data = '[{"diario":null,"semanal":null,"quincenal":null,"mensual":null,"portrabajorealizado":null}]';
        $clasif_ingresos =json_decode($data,true);
        $selectedEstado = array();
        $selectedMunicipio = array();
        $selectedParroquia = array();
        $tipos = DB::table('estados')->lists('estado', 'id');
        $estados = array(""=>"Seleccione un Estados") + $tipos;
        $municipio = array(""=>"Seleccione un Municipio");
        $parroquia = array(""=>"Seleccione una Parroquia");
        return view('censo.save', compact('estados',   'selectedEstado',
                                          'municipio', 'selectedMunicipio',
                                          'parroquia', 'selectedParroquia',
                                          'clasif_ingresos','grupofamiliars'
                                          ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCensoRequest  $request)
    {
        $all = $request->all();
                $censos = DB::table('censos')
            //->join('censos_academico_laboral', 'censos.censos_id', '=', 'censos_academico_laboral.id')
            //->join('censos_comunidad', 'censos.censos_id', '=', 'censos_comunidad.id')
            ->select('*')
            ->get();  
        $estados = Estados::all();
        DB::beginTransaction();
        try 
        {
            $censo = Censo::create([
                'nacionalidad'   => $request['nacionalidad'],
                'cedula'         => $request['cedula'],
                'name'           => $request['name'],
                'fecha_nac'      => $request['fecha_nac'],
                'sexo'           => $request['sexo'],
                'estado_civil'   => $request['estado_civil'],
                'telf_celular'   => $request['telf_celular'],
                'telf_casa'      => $request['telf_casa'],
                'telf_ofic'      => $request['telf_ofic'],
                'email'          => $request['email']
            ]);
                
            $clasif_ingreso[] = array(
                'diario'    => $request['diario'], 
                'semanal'   => $request['semanal'],
                'quincenal' => $request['quincenal'], 
                'mensual'   => $request['mensual'],
                'portrabajorealizado'   => $request['portrabajorealizado']
                );
                
            $clasif_ing = json_encode($clasif_ingreso);                    
                                    
            $censos_academico = Censos_academico_laboral::create([
                'grado_instrucion' => $request['grado_instrucion'],
                'profesion'        => $request['profesion'],
                'trabaja'          => $request['trabaja'],
                'pensionado'       => $request['pensionado'],
                'institucion'      => $request['institucion'],
                'clasif_ingreso'   => $clasif_ing,
                'ingreso_mensual'  => $request['ingreso_mensual'],
                'censos_id'        =>$censo->id
            ]);
            
            $censos_comunidad = Censos_comunidad::create([
                'nomb_comunidad' => $request['nomb_comunidad'],
                'estado_id'      => $request['estado_id'],
                'municipios_id'  => $request['municipios_id'],
                'parroquia_id'   => $request['parroquia_id'],
                'sector'         => $request['sector'],
                'direccion'      => $request['direccion'],
                'censos_id'      =>$censo->id
            ]);
            /*
DB::statement("CREATE TABLE `hola` (
  `id` int(11) NOT NULL,
  `sds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");


            DB::statement("DROP TABLE IF EXISTS template:".$request['cedula']);*/
            
            
            DB::insert("INSERT INTO `grupo_familials`(`id`, `cedula`, `name`, `fecha_nac`, `sexo`, `discapasidad`, `tipo_discapasidad`, `embarazo_templano`, `parentesco`, `grado_instrucion`, `profesion`, `pensionado`, `ingreso_mensual`, `censos_id`)  
            SELECT null as `id`, `cedula`, `name`, `fecha_nac`, `sexo`, `discapasidad`, `tipo_discapasidad`, `embarazo_templano`, `parentesco`, `grado_instrucion`, `profesion`, `pensionado`, `ingreso_mensual`, ".$censo->id." as censos_id FROM `temp_familia_logs` WHERE 1");
            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
            
            return view('censo.save', compact('estados'));
        }
        
            return redirect('/censo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estados = Estados::all();
        return view('censo.save', compact('estados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   

    DB::statement("TRUNCATE TABLE temp_familia_logs");
    $estados = Estados::all();
    $censos = DB::table('censos')
            ->join('censos_academico_laborals', 'censos.id', '=', 'censos_academico_laborals.censos_id')
            ->join('censos_comunidads', 'censos.id', '=', 'censos_comunidads.censos_id')
            ->select('*')
            ->where('censos.id',$id)->first();
            $grupofamiliars = DB::table('grupo_familials')
                ->select('*')
                ->where('censos_id',$id)
                ->get();
            
     $clasif_ingresos= json_decode($censos->clasif_ingreso, TRUE);
        $selectedEstado =    array('id',$censos->estado_id);
        $selectedMunicipio = array('id',$censos->municipios_id);
        $selectedParroquia = array('id',$censos->parroquia_id);
        $estadotipo = DB::table('estados')->lists('estado', 'id');
        $munictipo = DB::table('municipios')->where('id_estado',$censos->estado_id)->lists('municipio', 'id');
        $parrotipo = DB::table('parroquias')->where('id_municipio',$censos->municipios_id)->lists('parroquia', 'id');
        $estados = array(""=>"Seleccione un Estados") + $estadotipo;
        $municipio = array(""=>"Seleccione un Municipio") + $munictipo;
        $parroquia = array(""=>"Seleccione una Parroquia") + $parrotipo;
    return view('censo.edit', compact('estados',   'selectedEstado',
                                      'municipio', 'selectedMunicipio',
                                      'parroquia', 'selectedParroquia',
                                      'censos',
                                      'clasif_ingresos', 'grupofamiliars'
                                      ));

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
        $all = $request->all(); 
        $estados = Estados::all();

        $censo = Censo::find($id);
        $censo->fill([
                'nacionalidad'   => $request['nacionalidad'],
                'cedula'         => $request['cedula'],
                'name'           => $request['name'],
                'fecha_nac'      => $request['fecha_nac'],
                'sexo'           => $request['sexo'],
                'estado_civil'   => $request['estado_civil'],
                'telf_celular'   => $request['telf_celular'],
                'telf_casa'      => $request['telf_casa'],
                'telf_ofic'      => $request['telf_ofic'],
                'email'          => $request['email']
            ]);
        

            $clasif_ingreso[] = array(
                'diario'    => $request['diario'], 
                'semanal'   => $request['semanal'],
                'quincenal' => $request['quincenal'], 
                'mensual'   => $request['mensual'],
                'portrabajorealizado'   => $request['portrabajorealizado']
                );
                
            $clasif_ing = json_encode($clasif_ingreso); 

            $censos_academico = Censos_academico_laboral::find($censo->id);                                
            $censos_academico->fill([
                'grado_instrucion' => $request['grado_instrucion'],
                'profesion'        => $request['profesion'],
                'trabaja'          => $request['trabaja'],
                'pensionado'       => $request['pensionado'],
                'institucion'      => $request['institucion'],
                'clasif_ingreso'   => $clasif_ing,
                'ingreso_mensual'  => $request['ingreso_mensual']
            ]);
            $censos_comunidad = Censos_comunidad::find($censo->id);  
            $censos_comunidad->fill([
                'nomb_comunidad' => $request['nomb_comunidad'],
                'estado_id'      => $request['estado_id'],
                'municipios_id'  => $request['municipios_id'],
                'parroquia_id'   => $request['parroquia_id'],
                'sector'         => $request['sector'],
                'direccion'      => $request['direccion']
            ]);

            DB::insert("INSERT INTO `grupo_familials`(`id`, `cedula`, `name`, `fecha_nac`, `sexo`, `discapasidad`, `tipo_discapasidad`, `embarazo_templano`, `parentesco`, `grado_instrucion`, `profesion`, `pensionado`, `ingreso_mensual`, `censos_id`)  
            SELECT null as id, `cedula`, `name`, `fecha_nac`, `sexo`, `discapasidad`, `tipo_discapasidad`, `embarazo_templano`, `parentesco`, `grado_instrucion`, `profesion`, `pensionado`, `ingreso_mensual`, ".$id." as censos_id FROM `temp_familia_logs` WHERE 1");






            $censo->save();
            $censos_academico->save();
            $censos_comunidad->save();


       return redirect('/censo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {     
 
        Censo::destroy($id);
        return redirect('/censo');
    }
    
    public function grupo_familiar_store(GrupoFamiliarStoreRquest $request)
    {     
        $validator = Validator::make(
                $request->all(), 
                $request->rules(),
                $request->messages()
                );

        if ($validator->valid()){
            
            if ($request->ajax()){
                $temp_familia_log = temp_familia_log::create([
                    'cedula'              => $request['cedula'],
                    'name'                => $request['name'],
                    'fecha_nac'           => $request['fecha_nac'],
                    'sexo'                => $request['sexo'],
                    'discapasidad'        => $request['discapasidad'],
                    'tipo_discapasidad'   => $request['tipo_discapasidad'],
                    'embarazo_templano'   => $request['embarazo_templano'],
                    'parentesco'          => $request['parentesco'],
                    'grado_instrucion'    => $request['grado_instrucion'],
                    'profesion'           => $request['profesion'],
                    'pensionado'          => $request['pensionado'],
                    'ingreso_mensual'     => $request['ingreso_mensual']
                ]);
                $temp_familia_log->save();
                $grupofamiliars = DB::table('temp_familia_logs')
                    ->select('*')
                    ->get();  

                return response()->json(["valid" => true,"datatable"=>$grupofamiliars], 200);
            }
            else{/*
            return redirect('censo/create')
                    ->with('message', 'Enhorabuena formulario enviado correctamente');*/
                    $grupofamiliars = DB::table('temp_familia_logs')
                        ->select('*')
                        ->get();  
                    $grupofamiliars2 = json_encode($grupofamiliars);  
                    return response()->json(["datatable"=>$grupofamiliars2], 200);
            }
        }

    }
    
    
    
}
