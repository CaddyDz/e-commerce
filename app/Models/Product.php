<?php

declare(strict_types=1);

namespace App\Models;

use Gloudemans\Shoppingcart\CanBeBought;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\{HasMedia, InteractsWithMedia};
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasOne};

/**
 * App\Models\Product
 *
 * @property int $id
 * @property int $brand_id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property string $image
 * @property bool $display_sizes
 * @property bool $display_colors
 * @property string $slug
 * @property int $available
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Age[] $ages
 * @property-read int|null $ages_count
 * @property-read \App\Models\Brand $brand
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Color[] $colors
 * @property-read int|null $colors_count
 * @property-read \App\Discount|null $discount
 * @property-read \App\Illuminate\Foundation\Collection $images
 * @property-read mixed $new_price
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Size[] $sizes
 * @property-read int|null $sizes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Query\Builder|Product onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDisplayColors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDisplaySizes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Product withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Product withoutTrashed()
 * @mixin \Eloquent
 * @property int $display_age
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDisplayAge($value)
 */
class Product extends Model implements Buyable, HasMedia
{
    use CanBeBought, HasFactory, InteractsWithMedia, SoftDeletes;

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
        return $this->new_price;
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
        return round($this->price - $this->price * optional($this->discount)->value / 100);
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

    public function ages()
    {
        return $this->belongsToMany(Age::class);
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
        return $this->belongsToMany(Order::class)->withPivot(['quantity', 'size', 'color', 'age']);
    }
}
