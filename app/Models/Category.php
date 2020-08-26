<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = 
    [
        'name'
    ];

    
    public function article()
    {
        return $this->hasMany(Article::class);
    }
    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
    
}