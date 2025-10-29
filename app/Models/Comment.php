<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $table = 'comments';
	protected $fillable = [
		'name',
		'status',
		'post_id',
		'email',
		'content',
	];

	protected $casts = [
		'status' => 'integer',
		'post_id' => 'integer',
	];

}