<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReverseTransaction extends Model
{
	protected $table = 'reverse_transaction';
	protected $primaryKey = 'transactionstatusID';

	public $timestamps = false;

	protected $fillable = [
		'DebitAccountBalance',
		'Amount',
		'TransCompletedTime',
		'OriginalTransactionID',
		'Charge',
		'CreditPartyPublicName',
		'DebitPartyPublicName',
		'updateTime',
	];

	protected $casts = [
		'updateTime' => 'datetime',
	];

}