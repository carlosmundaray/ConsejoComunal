<?php

namespace Comunal;

use Illuminate\Database\Eloquent\Model;

class Censos_comunidad extends Model
{
	public $timestamps = false; 
    protected $table = 'censos_comunidads';
    protected $fillable = ['nomb_comunidad','estado_id','municipios_id','parroquia_id','sector','direccion','censos_id'];

  public function censo()
 {
    return $this->belongsTo('Censo');
 }

}
