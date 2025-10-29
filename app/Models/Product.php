<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use BinaryCats\Sku\HasSku;

class Product extends Model
{
    use HasSku;
	protected $table = 'products';
	protected $fillable = [
		'name',
		'pro_condition',
		'slung',
		'video',
		'category',
		'classifications',
		'sub_classifications',
		'thickness',
		'species',
		'color',
		'a_c_ratings',
		'warranties',
		'dimensions',
		'waters',
		'google_product_category',
		'brand',
		'featured',
		'trending',
		'banner_position',
		'sku',
		'stock',
		'price_raw',
		'price',
		'meta',
		'content',
		'image_one',
		'image_two',
		'image_three',
		'image_four',
	];

	protected $casts = [
		'classifications' => 'integer',
		'sub_classifications' => 'integer',
		'warranties' => 'integer',
		'waters' => 'integer',
		'google_product_category' => 'integer',
		'featured' => 'integer',
		'trending' => 'integer',
	];

}