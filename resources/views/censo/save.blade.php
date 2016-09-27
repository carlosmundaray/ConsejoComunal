@extends('layouts.app')

@section('htmlheader_title')
	Registro de Usuario
@endsection
@section('ajax-css')
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('/plugins/daterangepicker/daterangepicker-bs3.css') }}">
 <!-- bootstrap datepicker -->
 <link rel="stylesheet" href="{{ asset('/plugins/datepicker/datepicker3.css')}}">
 <!-- iCheck for checkboxes and radio inputs -->
 <link rel="stylesheet" href="{{ asset('/plugins/iCheck/all.css')}}">
 <!-- Select2 -->
 <link rel="stylesheet" href="{{ asset('/plugins/select2/select2.min.css')}}">
 <!-- DataTables -->
<link href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
 <style type="text/css">
    .datepicker {z-index: 1151 !important;}
 </style>
@endsection
@section('main-content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">ESTUDIO DEMOGRÁFICO Y SOCIOECONÓMICO</h3>
            </div>

		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Datos Personales</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Datos Academico y Laborales</a></li>
              <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Datos Comunidad</a></li>
              <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Datos Grupo Familiar</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
			@if($errors->has())
	            <div class="alert alert-warning" role="alert">
	               @foreach ($errors->all() as $error)
	                  <div>{!! $error !!}</div>
	              @endforeach
	            </div>
	        @endif </br>
  			
{!! Form::open(['route' => 'censo.store', 'method' => 'POST', 'role' => 'form']) !!}
@include('censo.form.form')
{!! Form::close() !!}

{!! Form::open(['route' => 'censo.store', 'method' => 'POST', 'role' => 'form','id'=>'formfamilia']) !!}
@include('censo.form.modal')
{!! Form::close() !!}

            <!-- /.tab-content -->
          </div>
          
		  
		  
          
@stop     


@section('ajax-script')
<!-- Select2 -->
<script src="{{ asset('/plugins/select2/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('/plugins/iCheck/icheck.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/plugins/fastclick/fastclick.js') }}"></script>
<script type="text/javascript">
//Initialize Select2 Elements
$(".select2").select2();
//Money Euro
$("[data-mask]").inputmask();
//Date picker
    $('#datepicker').datepicker({
      autoclose: true,
	  format: 'yyyy/mm/dd'
    });
    $('#datepicker2').datepicker({
      autoclose: true,
	  format: 'yyyy/mm/dd'
    });
//iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });	
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#Estado_id').change(function(){
			$.get("{{ url('estado')}}",
			{ option: $(this).val()},
			function(data) {
				$('#Municipios_id').empty();
				$('#Parroquia_id').empty();
				$.each(data, function(key, element) {
					$('#Municipios_id').append("<option value='" + key + "'>" + element + "</option>");
				});
			});
		});
		$('#Municipios_id').change(function(){
			$.get("{{ url('municipio')}}",
			{ option: $(this).val()},
			function(data) {
				$('#Parroquia_id').empty();
				$.each(data, function(key, element) {
					$('#Parroquia_id').append("<option value='" + key + "'>" + element + "</option>");
				});
			});
		});

	});		
</script>
<script type="text/javascript">
$(document).ready(function(){

$( "#agregar" ).click(function() {
  $('#myModal').modal('show');
});
});
</script>

<!-- DataTables -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
$('#example1').DataTable({
    "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ registros",
        "sZeroRecords":   "No se encontraron resultados",
        "sEmptyTable":    "Ningún dato disponible en esta tabla",
        "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
});
});
</script>

<script type="text/javascript">
$(document).ready(function(){

$("#buttonfamilia").click(function() {
	var fields = $("#formfamilia").serialize();
	var tabla = $('#example1').DataTable();

	$.post("{{url('censo/grupo')}}", fields, function(data){

		if(data.valid !== undefined){
			//$("#result").html("Enhorabuena formulario enviado correctamente");
			$("#formfamilia")[0].reset();
			$("#error_cedula").html(''); 
			$("#error_nombre").html(''); 
			$("#error_fecha_nac").html(''); 
			$("#error_sexo").html(''); 
			$("#error_parentesco").html(''); 
			$("#error_grado_instrucion").html(''); 
			$("#error_profesion").html(''); 
			$("#error_ingreso_mensual").html(''); 
			$("#error_tipo_discapasidad").html(''); 
		}
		else{

			$("#error_cedula").html(''); 
			$("#error_nombre").html(''); 
			$("#error_fecha_nac").html(''); 
			$("#error_sexo").html(''); 
			$("#error_parentesco").html(''); 
			$("#error_grado_instrucion").html(''); 
			$("#error_profesion").html(''); 
			$("#error_ingreso_mensual").html(''); 
			$("#error_tipo_discapasidad").html(''); 
			if (data.cedula !== undefined){
			   $("#error_cedula").html(data.cedula); 
			   $("#error_nombre").html(data.name); 
			   $("#error_fecha_nac").html(data.fecha_nac); 
			   $("#error_sexo").html(data.sexo); 
			   $("#error_parentesco").html(data.parentesco); 
			   $("#error_grado_instrucion").html(data.grado_instrucion); 
			   $("#error_profesion").html(data.profesion); 
			   $("#error_ingreso_mensual").html(data.ingreso_mensual); 
			   $("#error_tipo_discapasidad").html(data.tipo_discapasidad); 

			}

		}
		obj = data.datatable;
   //linppiar
   tabla.clear().draw();
   for (var a in obj) {
	   row = obj[a];
	   //alert(row.cedula);
	   tabla.row.add([
	   row.name,
	   row.sexo,
	   row.cedula,
	   row.fecha_nac,
	   row.discapasidad,
	   row.embarazo_templano,
	   row.parentesco,
	   row.profesion,
	   row.pensionado,
	   row.ingreso_mensual
   ]).draw( false );
   }		
	});
	return false;
});

});
</script>
@endsection
     