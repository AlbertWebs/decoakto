<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubClassification extends Model
{
	protected $table = 'sub_classifications';
	protected $fillable = [
		'classification_id',
		'title',
		'slung',
		'image',
	];

}