<?php

namespace Comunal;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
	public $timestamps = false;
    protected $table = 'municipios';
    protected $fillable = ['municipio','id_estado'];
}
