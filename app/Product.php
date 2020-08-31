<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\CanBeBought;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\Models\Media;

class Product extends Model implements Buyable, HasMedia
{
	use SoftDeletes, CanBeBought, InteractsWithMedia;

	/**
	 * The attributes that should be cast.
	 *
	 * @var array
	 */
	protected $casts = [
		'properties' => 'array',
	];

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
		return 0;
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
		return round($this->price - $this->price * $this->discount->value / 100);
	}

	public function registerMediaCollections(): void
	{
		$this->addMediaCollection('images');
	}

	public function sizes()
	{
		return $this->belongsToMany(Size::class);
	}

	public function colors()
	{
		return $this->belongsToMany(Color::class);
	}
}
