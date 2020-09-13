<?php

declare(strict_types=1);

namespace App;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\CanBeBought;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model implements Buyable, HasMedia
{
	use SoftDeletes, CanBeBought, InteractsWithMedia;

	/**
	 * The attributes that should be cast.
	 *
	 * @var array
	 */
	protected $casts = [
		'display_sizes' => 'bool',
		'display_colors' => 'bool',
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
		return $this->newPrice;
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

	public function properties()
	{
		return $this->belongsToMany(Property::class);
	}

	/**
	 * get product images
	 *
	 * return a collection of product images
	 *
	 * @return Illuminate\Foundation\Collection
	 * @throws conditon
	 **/
	public function getImagesAttribute()
	{
		return $this->getMedia('images')->all();
	}

	public function orders()
	{
		return $this->belongsToMany(Order::class)->withPivot(['quantity', 'size', 'color']);
	}
}
