<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	protected $table = 'abouts';
	protected $fillable = [
		'title',
		'meta',
		'content',
		'mission',
		'vision',
		'values',
		'image_one',
		'image_two',
		'image_three',
	];

}