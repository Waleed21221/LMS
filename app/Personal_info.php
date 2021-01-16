<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal_info extends Model
{
    protected $table = 'personal_info'; 
    // protected $fillable = ['name','phn_no','address','city','designation'];
    public $timestamps = false;

    // 'public function user()
        // {
        //     return $this->belongsTo('App\User');
        // }'
}
