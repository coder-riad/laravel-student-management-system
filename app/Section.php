<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
	use SoftDeletes;
	protected $fillable = ['class_id', 'section_name','room_no'];

	
	function relationToClass(){
		return $this->hasOne('App\ClassList','id','class_id');

	}
}
