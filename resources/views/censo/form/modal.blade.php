

<!--p>modal para formulario de grupo familiar</p-->
<div class="example-modal">
        <div class="modal modal-primary" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Agregar Grupo Familiar</h4>
              </div>
              <div class="modal-body"><!-- /. modal body -->

                  <div class="alert fade in" id='result'>
                      @if(Session::has('message'))
                          {{Session::get('message')}}
                      @endif
                  </div>

              <div class="row">
                <div class="col-md-12">

            <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                   <label for="cedula">Cedula de identidad</label>
                {{ Form::number('cedula', NULL, ['class'=>'form-control', 'id'=>'exampleInputcedula','placeholder'=>'Cedula'] ) }}
              <div class="text-danger" id='error_cedula'>{{$errors->form->first('cedula')}}</div>
              </div>         
              <div class="form-group">
                   <label for="exampleInputName">Nombre y Apellido</label>
                {{ Form::text('name', NULL, ['class'=>'form-control', 'id'=>'exampleInputName','placeholder'=>'Nombre y Apellido'] ) }}

              <div class="text-danger" id='error_nombre'>{{$errors->form->first('name')}}</div>
              </div>

              <div class="form-group">
                <label>Fecha de Nacimiento:</label>
                <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
                {{ Form::text('fecha_nac', NULL, ['class'=>'form-control pull-right', 'id'=>'datepicker2','placeholder'=>'Fecha de Nacimiento'] ) }}                </div>
                <div class="text-danger" id='error_fecha_nac'>{{$errors->form->first('fecha_nac')}}</div>
              </div>
              
              <!-- /.input group -->
              <div class="form-group">
                  <label>Sexo</label>
                  {{ Form::select('sexo',
                  ['' => 'Selecionar un sexo', 
                  'femenino' => 'Femenino', 
                  'masculino' => 'Masculino'], NULL,
                  ['class'=>'selectpicker form-control'], ['required'] ) }}
                  <div class="text-danger" id='error_sexo'>{{$errors->form->first('sexo')}}</div> 
              </div>
        <div class="row"> 
        <div class="col-xs-5">
            <div class="input-group">
            <label>Pensinado</label>
            </div>
            <span>Si</span>
            {{ Form::radio('pensionado', 'y', '',['class'=>'minimal']) }}
            <span>&#160;&#160;No</span>
            {{ Form::radio('pensionado', 'n', true, ['class'=>'minimal']) }}
        </div>
        <div class="col-xs-7">
            <div class="input-group">
            <label>Embarazo temprano</label>
            </div>
            <span>Si</span>
            {{ Form::radio('embarazo_templano', 'y', '',['class'=>'minimal']) }}
            <span>&#160;&#160;No</span>
            {{ Form::radio('embarazo_templano', 'n', true, ['class'=>'minimal']) }}
        </div>
        </div>


            </div>
        <div class="col-md-6">
              <!-- /.input group -->
              <div class="form-group">
                  <label>Parentesco</label>
                  {{ Form::select('parentesco',
                  ['' => 'Selecionar un parentesco', 
                  'padre'   => 'Padre', 
                  'madre'   => 'Madre', 
                  'hijo'    => 'Hijo', 
                  'tios'    => 'Tios',
                  'abuelos' => 'Abuelos',
                  ],NULL,
                  ['class'=>'selectpicker form-control'] ) }} 
                  <div class="text-danger" id='error_parentesco'>{{$errors->form->first('parentesco')}}</div> 
              </div>

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
                   <div class="text-danger" id='error_grado_instrucion'>{{$errors->form->first('grado_instrucion')}}</div> 
              </div>

              <!-- profesion -->
              <div class="form-group">
                  <label>Profesion u Oficio</label>
                  {{ Form::text('profesion', NULL, ['class'=>'form-control','placeholder'=>'Profesion u Oficio'] ) }}
                  <div class="text-danger" id='error_profesion'>{{$errors->form->first('profesion')}}</div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Ingreso Mensula</label>
                {{ Form::text('ingreso_mensual', NULL, ['class'=>'form-control','placeholder'=>'Bs.'] ) }}
                <div class="text-danger" id='error_ingreso_mensual'>{{$errors->form->first('ingreso_mensual')}}</div>
              </div>
        <div class="row"> 
        <div class="col-xs-5">
            <div class="input-group">
            <label>Discapacitado</label>
            </div>
            <span>Si</span>
            {{ Form::radio('discapasidad', 'y', '',['class'=>'minimal']) }}
            <span>&#160;&#160;No</span>
            {{ Form::radio('discapasidad', 'n', true, ['class'=>'minimal']) }}
        </div>
        <div class="col-xs-7">
            <div class="input-group">
            <label>Tipo Discapacidad</label>
            </div>
            {{ Form::text('tipo_discapasidad', NULL, ['class'=>'form-control','placeholder'=>'Tipo Discapacidad'] ) }}
            <div class="text-danger" id='error_tipo_discapasidad'>{{$errors->form->first('tipo_discapasidad')}}</div>
        </div>
        </div>


                    </div><!-- /.col-md-6 -->
                  </div>
                </div>
              </div>

              </div><!-- /.fin modal body -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="buttonfamilia" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>