<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
	use SoftDeletes;

	public function products(): HasMany
	{
		return $this->hasMany(Product::class);
	}

	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}
}
