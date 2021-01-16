<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'degree_id',
        'user_id',
        'student_id',
        'degree_code',
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
