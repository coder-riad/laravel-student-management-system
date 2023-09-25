<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
	use SoftDeletes;
	protected $fillable = ['student_name','gender','date_of_birth','blood_group','religion','fathers_name','fathers_mobile','mothers_name','mothers_mobile','present_address','permanent_address','class_name','section_id','group','roll','registration','created_at','student_image'];
	
	function relationToSection(){
	return $this->hasOne('App\Section','id','section_id');	
	}
		
}
