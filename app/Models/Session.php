<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
	protected $table = 'sessions';
	public $incrementing = false;

	public $timestamps = false;

	protected $fillable = [
		'user_id',
		'ip_address',
		'user_agent',
		'payload',
		'last_activity',
	];

	protected $casts = [
		'user_id' => 'integer',
		'last_activity' => 'integer',
	];

}