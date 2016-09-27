@extends('layouts.app')

@section('htmlheader_title')
  Socio Economico
@endsection
@section('contentheader_title')
 
@endsection
@section('ajax-css')
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 14 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:"Arial Narrow";
	panose-1:2 11 6 6 2 2 2 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
.MsoChpDefault
	{font-family:"Calibri","sans-serif";}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;
}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:70.85pt 3.0cm 70.85pt 3.0cm;}
div.WordSection1
	{page:WordSection1;
     page: background: #fff;

	}
-->
.content
	{ 
		width: 80%;
		background: #fff;


	}
	b{
		text-transform: uppercase;
	}

@media print { 
.content
	{ 
		width: 600px;
		background: #fff;
		margin-left: -100px;

	}

.btn-primary , footer{

  display: none;
}

}	
</style>
@endsection


@section('main-content')
<div class="content">
<div class=WordSection1>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center'><span style='position:relative;z-index:251660285'><span
style='left:0px;position:absolute;left:300px;top:-20px;width:145px;height:129px'><img
width=145 height=129
src="{{ asset('/img/image001.jpg') }}"
alt="Descripción: descarga.jpg"></span></span><span style='position:relative;
z-index:251659261'><span style='left:-160px;position:absolute;
top:-7px;width:105px;height:116px'><img width=105 height=116
src="{{ asset('/img/image002.jpg') }}"
alt="Descripción: Beata_Candelaria_de_San_José.jpg"></span></span><b><span
style='font-family:"Arial Narrow","sans-serif"'>REPÚBLICA BOLIVARIANA DE
VENEZUELA.</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center'><b><span style='font-family:"Arial Narrow","sans-serif"'>MINISTERIO
DEL PODER POPULAR PARA </span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center'><b><span style='font-family:"Arial Narrow","sans-serif"'>EL
DESARROLLO DE LAS COMUNAS.</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center'><b><span style='font-family:"Arial Narrow","sans-serif"'>MUNICIPIO
JOSÉ TADEO MONAGAS.</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center'><b><span style='font-family:"Arial Narrow","sans-serif"'>ALTAGRACIA
DE ORITUCO-ESTADO GUÁRICO.</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center'><b><span style='font-family:"Arial Narrow","sans-serif"'>CONCEJO
COMUNAL “LA CUMANA”.</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center'>&nbsp;</p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'>&nbsp;</p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'>&nbsp;</p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman","serif"'>CONSTANCIA DE RESIDENCIA</span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:normal'> </p>

<p class=MsoNormal style='margin-top:12.0pt;text-align:justify;text-indent:
35.4pt;line-height:200%'><span style='font-size:12.0pt;line-height:200%;
font-family:"Times New Roman","serif"'>Quienes suscriben, abajo firmantes;
Voceros y Voceras del Concejo Comunal <b>“{{$censos->nomb_comunidad}}”</b>, Parroquia Altagracia,
Municipio José Tadeo Monagas del Estado Guárico, Por medio de la presente
hacemos constar que la Ciudadana <b>{{$censos->name}}</b>,
titular de la Cedula de Identidad N° <b>V-{{$censos->cedula}}</b>, de Profesión T.S.U en
Informática, reside en esta comunidad en la siguiente dirección <b>{{$censos->direccion}}</b>, desde hace aproximadamente <b>31años</b>,
y durante todo este tiempo ha mantenido una conducta intachable con las normas
de convivencias y respetuosa de la leyes. </span></p>

<p class=MsoNormal style='margin-top:12.0pt;text-align:justify;text-indent:
35.4pt;line-height:200%'><span style='font-size:12.0pt;line-height:200%;
font-family:"Times New Roman","serif"'>Solicitud a petición de parte interesada
en Altagracia de Orituco, a los  14 días  del mes de septiembre del año 2016.</span></p>

<p class=MsoNormal style='margin-top:12.0pt;text-align:justify;text-indent:
35.4pt;line-height:200%'><span style='font-size:12.0pt;line-height:200%;
font-family:"Times New Roman","serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;text-indent:35.4pt;line-height:normal'><span
style='font-size:12.0pt;font-family:"Times New Roman","serif"'>_________________               
                    ______________</span></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;text-indent:35.4pt;line-height:normal'><span
style='font-size:12.0pt;font-family:"Times New Roman","serif"'>Mirtha Ruiz                                                   
Ely Sanchez</span></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;text-indent:35.4pt;line-height:normal'><span
style='font-size:12.0pt;font-family:"Times New Roman","serif"'>C.I.V-8.997.807                                              
C.I.V-4.713.483</span></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;text-indent:35.4pt;line-height:normal'><span
style='font-size:12.0pt;font-family:"Times New Roman","serif"'>Voc. Ppal.
Organo Ejecutivo                          Voc. Ppal. Habita y Vivienda</span></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:150%'>&nbsp;</p>

<p class=MsoNormal align=center style='margin-top:12.0pt;text-align:center;
line-height:normal'>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

</div>


</div>

<br/><br/><br/><br/>
<div align="center"><span class="btn btn-primary center" onclick="window.print(); return false;">Imprimir</span></div>
@endsection