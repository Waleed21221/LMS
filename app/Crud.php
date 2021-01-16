<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
     protected $fillable = ['name', 'code', 'description'];
    protected $table = 'programs'; 
    
    public $timestamps = false;
}
