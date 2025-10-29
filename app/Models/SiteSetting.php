<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
	protected $table = '_site_settings';
	protected $fillable = [
		'sitename',
		'logo',
		'logo_footer',
		'logo_two',
		'favicon',
		'email',
		'email_one',
		'mobile_one',
		'mobile_two',
		'mpesa',
		'paypal',
		'tagline',
		'url',
		'location',
		'map',
		'address',
		'facebook',
		'whatsapp',
		'telegram',
		'twitter',
		'linkedin',
		'instagram',
		'youtube',
		'google',
		'risks',
		'welcome',
		'tawkTo',
		'tawkToStatus',
		'whatsAppStatus',
	];

	protected $casts = [
		'tawkToStatus' => 'integer',
		'whatsAppStatus' => 'integer',
	];

}