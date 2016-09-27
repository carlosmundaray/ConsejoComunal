@extends('layouts.app')

@section('htmlheader_title')
  Socio Economico
@endsection
@section('ajax-css')
<style type="text/css">
.border{
  border:1px solid;
  font-size: 0.8em;

}
table{
  width: 100%;
  padding: 5px;
  background:#ffffff;
} 
thead{
  padding-right: 20px;
}
table td, th{
   border:1px solid;
    font-size: 0.9em;
}  

.titulo{

  font-size: 1em;
}

@media print { 

.border{
  border:1px solid  #666;
  font-size: 0.8em;
}
.titulo{

  font-size: 1em;
}
table{
  width: 100%;
  padding: 5px;
  background:#ffffff;

} 
thead{
  padding-right: 10px;
}
table td, th{
   border:1px solid;
   font-size: 0.9em;

}  
.btn-primary , footer{

  display: none;
}


} 

</style>



@endsection
@section('main-content')
 
<div class="container show-top-margin separate-rows " style="background:#ffffff;">
  <div class="row show-grid border">
    <div class="col-md-12 border" align="center" style="padding:5px;"><b>ESTUDIO DEMOGRÁFICO Y SOCIOECONÓMICO</b></div>
    <div class="col-md-10">CONSEJO COMUNAL:</div>
    <div class="col-md-2">PLANILLA Nº</div>
    <div class="col-md-2">CODIGO: </div>
    <div class="col-md-2">RIF: </div>
    <div class="col-md-6">NRO DE CUENTA: </div>
    <div class="col-md-2">FECHA:</div>
  </div>
  <div class="row show-grid border">
    <div class="col-md-12"><b>I. UBICACIÓN GEOGRÁFICA DE LA COMUNIDAD</b></div>
  </div>


  <div class="row show-grid">
    <div class="col-md-2 border"><b class="titulo">ESTADO:</b> {{$resultados[0]}}</div>
    <div class="col-md-2 border"><b class="titulo">MUNICIPIO:</b> {{$resultados[1]}}</div>
    <div class="col-md-2 border"><b class="titulo">PARROQUIA:</b> {{$resultados[2]}}</div>
    <div class="col-md-2 border"><b class="titulo">SECTOR:</b> {{$censos->sector }}</div>
    <div class="col-md-2 border"><b class="titulo">NOMBRE DE LA COMUNIDAD:</b> {{$censos->nomb_comunidad }}</div>
    <div class="col-md-2 border"><b class="titulo">DIRECCIÓN:</b> {{$censos->direccion }}</div>
  </div>

  <div class="row show-grid border">
  <div class="col-md-12"><b>II. DATOS PERSONALES DEL
    JEFE DEL GRUPO FAMILIAR</b></div>
  </div>
    <div class="row show-grid">
    <div class="col-md-2 border"><b class="titulo">NOMBRES:</b>  {{ $censos->name }}</div>
    <div class="col-md-2 border"><b class="titulo">APELLIDOS:</b> {{ $censos->name}}</div>
    <div class="col-md-2 border"><b class="titulo">C.I. Nº:</b>  {{ $censos->cedula }}</div>
    <div class="col-md-2 border"><b class="titulo">NACIONALIDAD:</b> ({{ $censos->nacionalidad }})</div>
    <div class="col-md-2 border"><b class="titulo">FECHA DE NACIMIENTO:</b> {{ $censos->fecha_nac }}</div>
    <div class="col-md-2 border"><b class="titulo">SEXO:</b> {{ $censos->sexo }}</div>
  </div>
    <div class="row show-grid">
    <div class="col-md-2 border"><b class="titulo">INCAPACITADO</b> ninguna</div>
    <div class="col-md-2 border"><b class="titulo">PENSIONADO:</b> {{$censos->pensionado}} </div>
    <div class="col-md-2 border"><b class="titulo">ESTADO CIVIL:</b> {{$censos->estado_civil }}</div>
    <div class="col-md-2 border"><b class="titulo">NIVEL DE INSTRUCCIÓN: {{$censos->grado_instrucion }} </div>
    <div class="col-md-2 border"><b class="titulo">PROFESIÓN /OFICIO:</b> {{ $censos->profesion }}</div>
    <div class="col-md-2 border"><b class="titulo">TRABAJA ACTUALMENTE:</b> {{($censos->trabaja === "y")?"Si":"No"  }}</div>
  </div>    
  <div class="row show-grid">
    <div class="col-md-2 border"><b class="titulo">TELF. CEL.:</b> {{$censos->telf_celular }}</div>
    <div class="col-md-2 border"><b class="titulo">TELF. OFIC.:</b> {{$censos->telf_ofic }}</div>
    <div class="col-md-2 border"><b class="titulo">TELF. HAB.:</b> {{$censos->telf_casa }}</div>
    <div class="col-md-2 border"><b class="titulo">E-MAIL:</b> {{$censos->email}}</div>
    <div class="col-md-2 border"><b class="titulo">CLASIFICACIÓN DEL INGRESO FAMILIAR:</b> 
@foreach (json_decode($censos->clasif_ingreso, true) as $key) 
{{$key['diario']}}&#160; {{$key['semanal']}}&#160;{{$key['quincenal']}}&#160;
{{$key['mensual']}}&#160; {{$key['portrabajorealizado']}}
@endforeach 
    </div>
    <div class="col-md-2 border"><b>INGRESO MENSUAL Bs.:</b> {{$censos->ingreso_mensual}}</div>
  </div>


  <div class="row show-grid border">
  <div class="col-md-12"><b>III. CARACTERÍSTICAS DEL GRUPO FAMILIAR</b></div>
  </div>
   <div class="row show-grid">
          <table>
            <thead>
            <tr>
              <th>Apellidos y Nombres</th>
              <th>Sexo</th>
              <th>cedula</th>
              <th>Fecha de nacimiento</th>
              <th>Discapasidad</th>
              <th>Embarazo Temprano</th>
              <th>parentezco</th>
              <th>Profesion</th>
              <th>Pensionado</th>
              <th>Ingreso Mensual</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($grupofamiliars as $familia)        
                 <tr>
                   <td>{{ $familia->name  }}</td>
                   <td>{{ $familia->sexo }}</td>
                   <td>{{ $familia->cedula }}</td>
                   <td>{{ $familia->fecha_nac }}</td>
                   <td>{{ $familia->discapasidad }}</td>
                   <td>{{ $familia->embarazo_templano }}</td>
                   <td>{{ $familia->parentesco }}</td>
                   <td>{{ $familia->profesion }}</td>
                   <td>{{ $familia->pensionado }}</td>
                   <td>{{ $familia->ingreso_mensual }}</td>
                 </tr>
          @endforeach

            </tbody>
            <tfoot>
            <tr>

            </tr>
            </tfoot>
          </table>
</div>

</div>

<br/>
<div align="center"><span class="btn btn-primary center" onclick="window.print(); return false;">Imprimir</span></div>
@endsection