<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = 
    [
        'nis',
        'name',
        'email',
        'gender',
        'birthday',
        'phone_number',
        'address',
        'grade_id'
    ];
    
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
    
}
