<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\CanBeBought;

class Product extends Model implements Buyable
{
	use SoftDeletes, CanBeBought;

	public function getBuyableIdentifier()
	{
		return $this->id;
	}

	public function getBuyableDescription()
	{
		return $this->name;
	}

	public function getBuyablePrice()
	{
		return $this->price;
	}

	public function getBuyableWeight()
	{
		return $this->weight;
	}

	public function brand(): BelongsTo
	{
		return $this->belongsTo(Brand::class);
	}

	public function discounts(): HasMany
	{
		return $this->hasMany(Discount::class);
	}
}
