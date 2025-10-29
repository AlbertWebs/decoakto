<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thickness extends Model
{
	protected $table = 'thicknesses';
	protected $fillable = [
		'category_id',
		'title',
		'image',
	];

}