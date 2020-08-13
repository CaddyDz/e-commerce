<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\CanBeBought;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model implements Buyable
{
	use SoftDeletes, CanBeBought;

	public function getBuyableIdentifier($options = null)
	{
		return $this->id;
	}

	public function getBuyableDescription($options = null)
	{
		return $this->name;
	}

	public function getBuyablePrice($options = null)
	{
		return $this->price;
	}

	public function getBuyableWeight($options = null)
	{
		return $this->weight;
	}

	public function brand(): BelongsTo
	{
		return $this->belongsTo(Brand::class);
	}

	public function discount(): HasOne
	{
		return $this->hasOne(Discount::class);
	}

	public function getRouteKeyName(): string
	{
		return 'slug';
	}

	public function getNewPriceAttribute()
	{
		return $this->price - $this->price * $this->discount->value / 100;
	}
}
