<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
	protected $guarded = []; // yolo

	public function reviewer()
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

	public function products()
	{
		return $this->BelongsToMany(Product::class)->withPivot(['quantity', 'size', 'color']);
	}
}
