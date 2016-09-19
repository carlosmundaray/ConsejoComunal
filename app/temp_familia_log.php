<?php

namespace Comunal;

use Illuminate\Database\Eloquent\Model;

class temp_familia_log extends Model
{
    protected $table = 'temp_familia_logs';
    protected $fillable = ['cedula','name','fecha_nac','sexo','discapasidad','tipo_discapasidad','embarazo_templano','parentesco','grado_instrucion','profesion','pensionado','ingreso_mensual'];
}
