<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProExcel extends Model
{
	protected $table = '_pro_excel';
	protected $fillable = [
		'code',
		'title',
		'description',
		'availability',
		'condition',
		'price',
		'link',
		'image_link',
		'brand',
		'google_product_category',
	];

}