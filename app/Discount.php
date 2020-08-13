<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Discount extends Model
{
	protected $casts = [
		'expires_at' => 'date'
	];

	public function product(): BelongsTo
	{
		return $this->belongsTo(Product::class);
	}
}
