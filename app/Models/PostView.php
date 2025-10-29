<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostView extends Model
{
	protected $table = 'post_views';
	protected $fillable = [
		'post_id',
		'titleslug',
		'url',
		'session_id',
		'user_id',
		'ip',
		'agent',
	];

	protected $casts = [
		'post_id' => 'integer',
		'user_id' => 'integer',
	];

}