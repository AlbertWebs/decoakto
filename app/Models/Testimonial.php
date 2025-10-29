<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
	protected $table = 'testimonials';
	protected $fillable = [
		'name',
		'content',
		'company',
		'position',
		'rating',
		'image',
	];

}