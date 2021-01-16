<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
 
    protected $fillable = [
        'degree_name',
        'degree_code'
        
       
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
}
