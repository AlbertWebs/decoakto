<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailSetting extends Model
{
	protected $table = 'email_settings';
	protected $fillable = [
		'email',
		'title',
		'site_title',
		'driver',
		'host',
		'port',
		'username',
		'password',
		'encryption',
		'smtp_status',
		'email_body',
	];

	protected $casts = [
		'smtp_status' => 'integer',
	];

}