<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['images'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}