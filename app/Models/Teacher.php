<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = 
    [
        'nip',
        'name',
        'birthday',
        'phone_number',
        'gender',
        'address',
        'course_id',
    ];

    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    
}
