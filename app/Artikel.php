<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
	const CREATED_AT = 'tanggal_dibuat';
	const UPDATED_AT = 'tanggal_diedit';

	protected $fillable = [
		'title','description','thumbnail','ringkasan','pembuat_artikel'
	];
    
}
