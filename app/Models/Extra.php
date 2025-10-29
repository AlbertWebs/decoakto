<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
	protected $table = 'extras';
	protected $fillable = [
		'category_id',
		'title',
		'content',
		'image',
	];

}