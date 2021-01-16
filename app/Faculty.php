<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'course_id',
        'user_id',
        'staff_code',
        'first_name',
        'last_name',
        'contact_number',
        
    ];

    public function course()
    {
        return $this->belongsToMany(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
