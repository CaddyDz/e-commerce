<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, BelongsToMany};

/**
 * App\Models\Order
 *
 * @property int $id
 * @property int|null $reviewer_id
 * @property int|null $user_id
 * @property string $status
 * @property string $lastname
 * @property string $firstname
 * @property string $address1
 * @property string|null $address2
 * @property string $town
 * @property string|null $zip
 * @property string $district
 * @property string $email
 * @property string $phone
 * @property string $subtotal
 * @property string $shipping_cost
 * @property string $total
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $client
 * @property-read string $icon
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \App\Models\User|null $reviewer
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereReviewerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereZip($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
	protected $guarded = []; // yolo

	public function client(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function reviewer(): BelongsTo
	{
		return $this->belongsTo(User::class, 'reviewer_id');
	}

	public function getIconAttribute(): string
	{
		switch ($this->status) {
			case 'pending':
				return 'entypo:circular-graph';
			case 'suspended':
				return 'entypo:controller-paus';
			case 'validated':
				return 'entypo:check';
			case 'rejected':
				return 'entypo:circle-with-cross';
			default:
				return 'entypo:controller-play';
		}
	}

	public function products(): BelongsToMany
	{
		return $this->BelongsToMany(Product::class)->withPivot(['quantity', 'size', 'color', 'age']);
	}
}
