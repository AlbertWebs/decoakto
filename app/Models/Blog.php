<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $table = 'blogs';
	protected $fillable = [
		'active',
		'slung',
		'title',
		'tags',
		'video',
		'meta',
		'content',
		'author',
		'category',
		'image_one',
		'image_two',
		'image_three',
		'image_four',
	];

	protected $casts = [
		'active' => 'boolean',
	];

}