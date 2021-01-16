<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SemesterCrud extends Model
{
     protected $fillable = ['semester'];
    protected $table = 'semester'; 
    
    public $timestamps = false;
}
