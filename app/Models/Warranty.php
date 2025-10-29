<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
	protected $table = 'warranties';
	protected $fillable = [
		'category_id',
		'title',
		'image',
	];

}