<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
	protected $table = 'portfolios';
	protected $fillable = [
		'name',
		'category_id',
		'big',
		'home',
		'slung',
		'video',
		'meta',
		'content',
		'image_one',
		'image_two',
		'image_three',
		'image_four',
	];

	protected $casts = [
		'category_id' => 'integer',
		'big' => 'integer',
		'home' => 'integer',
	];

}