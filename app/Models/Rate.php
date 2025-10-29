<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
	protected $table = 'rates';
	public $incrementing = false;

	protected $fillable = [
		'currency',
		'symbol',
		'rates',
	];

}