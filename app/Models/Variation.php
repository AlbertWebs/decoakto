<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
	protected $table = 'variations';
	protected $fillable = [
		'type',
		'status',
		'image',
		'value',
		'price',
		'product_id',
	];

}