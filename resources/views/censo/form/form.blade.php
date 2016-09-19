<div class="tab-content">
  <div class="tab-pane active" id="tab_1">
  <div class="box-body">

<div class="row">

  <div class="col-xs-3">
    <div class="form-group">
        <label for="exampleInputEmail1">Nacionalidad</label>
        {{ Form::select('nacionalidad',
        ['' => 'Selecionar', 
        'V' => 'Venezolano', 
        'E' => 'Exrajero'], NULL,
        ['class'=>'selectpicker form-control'] ) }} 
    </div>
  </div>
  
  <div class="col-xs-3">
    <div class="form-group">
      <label for="exampleInputCedula">Cedula de identidad</label>
    {{ Form::number('cedula', NULL, ['class'=>'form-control', 'id'=>'exampleInputcedula','placeholder'=>'Cedula'] ) }}
    </div>
  </div>
</div>
              
  
  <div class="form-group">
    <label for="exampleInputName">Nombre y Apellido</label>
    {{ Form::text('name', NULL, ['class'=>'form-control', 'id'=>'exampleInputName','placeholder'=>'Nombre y Apellido'] ) }}
  </div>
  
  <div class="form-group">
    <label>Fecha de Nacimiento:</label>
    <div class="input-group date">
  <div class="input-group-addon">
    <i class="fa fa-calendar"></i>
  </div>
    {{ Form::text('fecha_nac', NULL, ['class'=>'form-control pull-right', 'id'=>'datepicker','placeholder'=>'Fecha de Nacimiento'] ) }}
    </div>
  </div>
  
  <!-- /.input group -->
  <div class="form-group">
      <label>Sexo</label>
      {{ Form::select('sexo',
      ['' => 'Selecionar un sexo', 
      'femenino' => 'Femenino', 
      'masculino' => 'Masculino'], NULL,
      ['class'=>'selectpicker form-control'] ) }} 
  </div>
  
    <div class="form-group">
      <label>Estado Civil</label>
      {{ Form::select('estado_civil',
      ['' => 'Selecionar un Estado Civil', 
      'Soltero' => 'Soltero (a)', 
      'Casado' => 'Casado (a)', 
      'Divorciado' => 'Divorciado (a)', 
      'Viudo' => 'Viudo (a)', 
      'Concubino' => 'Concubino (a)'], NULL,
       ['class'=>'form-control'] ) }} 
    </div>
                  
<div class="row">
    <div class="col-xs-4">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-phone"></i>
            </div>
            {{ Form::text('telf_celular', NULL, ['class'=>'form-control','placeholder'=>'Celular', 'data-inputmask'=>'"mask": "(999) 999-9999"', 'data-mask'=>''] ) }}
        </div>
    </div>
    <div class="col-xs-4">
        <div class="input-group">
            <div class="input-group-addon">
            <i class="fa fa-phone"></i>
            </div>
            {{ Form::text('telf_casa', NULL, ['class'=>'form-control','placeholder'=>'Casa', 'data-inputmask'=>'"mask": "(999) 999-9999"', 'data-mask'=>''] ) }}
        </div>						
    </div>
    <div class="col-xs-4">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-phone"></i>
            </div>
            {{ Form::text('telf_ofic', NULL, ['class'=>'form-control','placeholder'=>'Oficina', 'data-inputmask'=>'"mask": "(999) 999-9999"', 'data-mask'=>''] ) }}
        </div>
    </div>
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Correo Electronico</label>
  {{ Form::email('email', NULL, ['class'=>'form-control', 'id'=>'exampleInputCorreo','placeholder'=>'Correo Electronico'] ) }}
</div>
    
</div>
  <!-- /.box-body -->
  </div>
  <!-- /.tab-pane -->
  <div class="tab-pane" id="tab_2">
      <div class="box-body">
          <!-- academico -->
          <div class="form-group">
              <label>Grado de Instrucion</label>
              {{ Form::select('grado_instrucion',
              ['' => 'Grado de Instrucion', 
              'Basica' => 'Básica', 
              'Bachiller' => 'Bachiller', 
              'Tecnico-Superio' => 'Técnico Superio', 
              'Post-Grado' => 'Post Grado', 
              'Sin-Instruccion' => 'Sin Instrucción'], NULL,
               ['class'=>'form-control'] ) }} 
          </div>
          
          <!-- profesion -->
          <div class="form-group">
              <label>Profesion u Oficio</label>
              {{ Form::text('profesion', NULL, ['class'=>'form-control','placeholder'=>'Profesion u Oficio'] ) }}
          </div>
          <!-- checkbox -->
          
        <div class="form-group">
          <label>Trabaja Actualmente</label>
          <div class="input-group">
          <label>
            <span>Si</span>
            {{ Form::radio('trabaja', 'y', '',['class'=>'minimal']) }}
          </label>
          <label>
            <span>&#160;&#160;No</span>
            {{ Form::radio('trabaja', 'n', true, ['class'=>'minimal']) }}
          </label>
          </div>
        </div>
        
        <div class="row">	
        <div class="col-xs-3">
            <div class="input-group">
            <label>Pensinado</label>
            </div>
            <span>Si</span>
            {{ Form::radio('pensionado', 'y', '',['class'=>'minimal']) }}
            <span>&#160;&#160;No</span>
            {{ Form::radio('pensionado', 'n', true, ['class'=>'minimal']) }}
        </div>
            <div class="col-xs-4">
                <div class="input-group">
                <label>Institucion</label>
                </div>
            {{ Form::text('institucion', NULL, ['class'=>'form-control','placeholder'=>'Institucion'] ) }}
            </div>
        </div>
        <div class="form-group">
          <label>Clasificacion Ingreso</label>

          <div class="input-group">
          <label>
            <span>Diario</span>
            {{ Form::checkbox('diario', 'diario', $clasif_ingresos[0]['diario'], ['class'=>'minimal']) }}
          </label>
          <label>
            <span>&#160;&#160;Semanal</span>
            {{ Form::checkbox('semanal', 'semanal', $clasif_ingresos[0]['semanal'], ['class'=>'minimal']) }}
          </label>
          <label>
            <span>&#160;&#160;Quincenal</span>
            {{ Form::checkbox('quincenal', 'quincenal', $clasif_ingresos[0]['quincenal'], ['class'=>'minimal']) }}
          </label>
          <label>
            <span>&#160;&#160;Mensual</span>
            {{ Form::checkbox('mensual', 'mensual', $clasif_ingresos[0]['mensual'], ['class'=>'minimal']) }}
          </label>
          <label>
            <span>&#160;&#160;Por Trabajo Realizado</span>
            {{ Form::checkbox('portrabajorealizado', 'portrabajorealizado',$clasif_ingresos[0]['portrabajorealizado'], ['class'=>'minimal']) }}
          </label>
          </div>
      
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Ingreso Mensula</label>
          {{ Form::text('ingreso_mensual', NULL, ['class'=>'form-control','placeholder'=>'Bs.'] ) }}
        </div>
          
      </div>
  </div>
  <!-- /.tab-pane -->
  <div class="tab-pane" id="tab_3">
      <div class="box-body">
          <!-- Comunidad -->
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre de la Comunidad</label>
            {{ Form::text('nomb_comunidad', NULL, ['class'=>'form-control','placeholder'=>'Nombre de la Comunidad'] ) }}
          </div>
          <div class="row">
          <div class="col-xs-4">
          <div class="form-group">
            <label>Estado</label>
            {!! Form::select('estado_id', $estados, $selectedEstado, ['id'=>'Estado_id', 'class'=>'form-control select2', 'style'=>'width: 100%;']) !!}
          </div>
          <!-- /.form-group -->
          </div>
          <div class="col-xs-4">
          <div class="form-group">
            <label>Municipio</label>
            {!! Form::select('municipios_id', $municipio, $selectedMunicipio, ['id'=>'Municipios_id', 'class'=>'form-control select2', 'style'=>'width: 100%;']) !!}
          </div>
          </div>
          <!-- /.form-group -->
          <div class="col-xs-4">
          <div class="form-group">
            <label>Parroquia</label>
            {!! Form::select('parroquia_id', $parroquia, $selectedParroquia, ['id'=>'Parroquia_id', 'class'=>'form-control select2', 'style'=>'width: 100%;']) !!}
          </div>
          </div>
          <!-- /.form-group -->
          </div>
          
          <div class="form-group">
              <label for="exampleInputEmail1">Sector</label>
              {{ Form::text('sector', NULL, ['class'=>'form-control','placeholder'=>'Sector'] ) }}
          </div>
          <div class="form-group">
            {{ Form::textarea('direccion', NULL, ['class'=>'form-control','placeholder'=>'Dirección'] ) }}
          </div>
          
    </div>
      
 

  <!-- /.tab-pane -->

</div>
<div class="tab-pane" id="tab_4">
    <div class="box-body">
<button type="button" class="btn btn-primary" data-toggle="modal" id="agregar">Agregar familiar</button>




<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
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
              <th>Action</th>
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
		           <td></td>
                 </tr>
     			@endforeach

            </tbody>
            <tfoot>
            <tr>

            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

</div>
</div>
<div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>



