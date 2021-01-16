<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
	protected $table = 'semester'; 
    protected $fillable = ['program_id','semester'];
    public $timestamps = false;

}
