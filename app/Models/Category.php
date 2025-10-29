<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';
	protected $fillable = [
		'title',
		'order',
		'has_products',
		'name',
		'slung',
		'meta',
		'content',
		'thicknesses',
		'a_c_ratings',
		'color',
		'species',
		'heading_two',
		'heading_two_section',
		'content_two',
		'content_two_image',
		'image',
	];

	protected $casts = [
		'order' => 'integer',
		'has_products' => 'integer',
	];

}