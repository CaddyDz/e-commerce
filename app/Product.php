<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;

	public function brand(): BelongsTo
	{
		return $this->belongsTo(Brand::class);
	}

	public function discounts(): HasMany
	{
		return $this->hasMany(Discount::class);
	}
}
