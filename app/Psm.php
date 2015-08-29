<?php

namespace psl;

use Illuminate\Database\Eloquent\Model;

class Psm extends Model
{

	protected $table = 'psms';
 
	protected $fillable = ['usuario','categoria','sexo', 'publicacion'];
 


}
