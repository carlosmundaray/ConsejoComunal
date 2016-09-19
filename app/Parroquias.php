<?php

namespace Comunal;

use Illuminate\Database\Eloquent\Model;

class Parroquias extends Model
{
	public $timestamps = false;
    protected $table = 'parroquias';
    protected $fillable = ['parroquia','id_municipio'];
}
