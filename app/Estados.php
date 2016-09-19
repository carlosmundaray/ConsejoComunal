<?php

namespace Comunal;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
	public $timestamps = false;
    protected $table = 'estados';
    protected $fillable = ['estado','iso_3166-2'];
}
