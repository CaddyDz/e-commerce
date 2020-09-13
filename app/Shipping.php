<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
	/**
	 * The attributes that should be cast.
	 *
	 * @var array
	 */
	protected $casts = [
		'price' => 'float'
	];

	public function getAvailableAttribute(): bool
	{
		return (bool) (!$this->price == 0.00);
	}
}
