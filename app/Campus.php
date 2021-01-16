<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'fax',
        'email',
        'address',
    ];
}
