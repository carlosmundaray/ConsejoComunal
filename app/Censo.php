<?php

namespace Comunal;

use Illuminate\Database\Eloquent\Model;

class Censo extends Model
{
    protected $table = 'censos';
    protected $fillable = ['nacionalidad','cedula','name','fecha_nac','sexo','estado_civil','telf_celular','telf_casa','telf_ofic','email'];

    
    public function censos_academico_laboral()
    {
        return $this->hasOne('Comunal\Censos_academico_laboral', 'censos_id');
    }


    public function censos_comunidad()
    {
        return $this->hasOne('Comunal\Censos_comunidad', 'censos_id');
    }
}
