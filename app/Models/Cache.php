<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cache extends Model
{
	protected $table = 'cache';
	protected $primaryKey = 'key';

	public $incrementing = false;

	public $timestamps = false;

	protected $fillable = [
		'value',
		'expiration',
	];

	protected $casts = [
		'expiration' => 'integer',
	];

}