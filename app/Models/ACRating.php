<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ACRating extends Model
{
	protected $table = 'a_c_ratings';
	protected $fillable = [
		'category_id',
		'slung',
		'title',
		'image',
	];

}