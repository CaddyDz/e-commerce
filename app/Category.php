<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
	public function brands(): HasMany
	{
		return $this->hasMany(Brand::class);
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
