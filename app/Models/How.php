<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class How extends Model
{
	protected $table = 'hows';
	public $incrementing = false;

	protected $fillable = [
		'title',
		'slung',
		'content',
		'image',
	];

}