<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Age
 *
 * @property int $id
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Age newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Age newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Age query()
 * @method static \Illuminate\Database\Eloquent\Builder|Age whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Age whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Age whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Age whereValue($value)
 * @mixin \Eloquent
 */
class Age extends Model
{
	public function products()
	{
		return $this->belongsToMany(Product::class);
	}
}
