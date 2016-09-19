<?php

namespace Comunal;

use Illuminate\Database\Eloquent\Model;

class Censos_academico_laboral extends Model
{
  	public $timestamps = false; 
    protected $table = 'censos_academico_laborals';
    protected $fillable = ['grado_instrucion','profesion','trabaja','pensionado','institucion','clasif_ingreso','ingreso_mensual','censos_id'];

  public function censo()
 {
    return $this->belongsTo('Censo');
 }


}
