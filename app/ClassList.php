<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassList extends Model
{
   use SoftDeletes;
   protected $fillable = ['class_name', 'class_code'];
}
