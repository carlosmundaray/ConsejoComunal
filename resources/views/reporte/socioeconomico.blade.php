@extends('layouts.app')

@section('htmlheader_title')
  Socio Economico
@endsection
@section('ajax-css')
<style type="text/css">
.border{
  border:1px solid;

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
    <div class="col-md-2 border">ESTADO</div>
    <div class="col-md-2 border">MUNICIPIO</div>
    <div class="col-md-2 border">PARROQUIA</div>
    <div class="col-md-2 border">SECTOR</div>
    <div class="col-md-2 border">NOMBRE DE LA COMUNIDAD</div>
    <div class="col-md-2 border">DIRECCIÓN</div>
  </div>
  <div class="row show-grid border">
  <div class="col-md-12"><b>II. DATOS PERSONALES DEL
    JEFE DEL GRUPO FAMILIAR</b></div>
  </div>
    <div class="row show-grid">
    <div class="col-md-2 border">NOMBRES: </div>
    <div class="col-md-2 border">APELLIDOS: </div>
    <div class="col-md-2 border">C.I. Nº: </div>
    <div class="col-md-2 border">V  E  </div>
    <div class="col-md-2 border">FECHA DE NACIMIENTO: </div>
    <div class="col-md-2 border">SEXO</div>
  </div>
    <div class="row show-grid">
    <div class="col-md-2 border">INCAPACITADO </div>
    <div class="col-md-2 border">PENSIONADO: </div>
    <div class="col-md-2 border">ESTADO CIVIL</div>
    <div class="col-md-2 border">NIVEL DE INSTRUCCIÓN </div>
    <div class="col-md-2 border">PROFESIÓN /OFICIO</div>
    <div class="col-md-2 border">TRABAJA ACTUALMENTE</div>
  </div>    
  <div class="row show-grid">
    <div class="col-md-2 border">TELF. CEL. </div>
    <div class="col-md-2 border">TELF. OFIC. </div>
    <div class="col-md-2 border">TELF. HAB.</div>
    <div class="col-md-2 border">E-MAIL </div>
    <div class="col-md-2 border">CLASIFICACIÓN DEL INGRESO FAMILIAR</div>
    <div class="col-md-2 border">INGRESO MENSUAL Bs.</div>
  </div>
  <div class="row show-grid border">
  <div class="col-md-12"><b>III. CARACTERÍSTICAS DEL GRUPO FAMILIAR</b></div>
  </div>

</div>
<div>
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
                 <tr>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>

               <td></td>
                 </tr>
                 <tr>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
                   <td>sdfdfsd</td>
               <td></td>
                 </tr>

            </tbody>
            <tfoot>
            <tr>

            </tr>
            </tfoot>
          </table>

</div>
@endsection