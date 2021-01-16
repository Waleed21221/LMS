<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    protected $softDelete = true;
    protected $fillable = [
        'degree_id',
        'degree_code',
        'course_name',
        'course_code',
    ];

    protected $dates = ['deleted_at'];

    public function degrees()
    {
        return $this->hasMany(Degree::class);
    }
}
