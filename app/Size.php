<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
	public function products()
	{
		return $this->belongsToMany(Product::class);
	}
}
