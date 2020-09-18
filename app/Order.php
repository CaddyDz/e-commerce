<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $guarded = []; // yolo

	public function client()
	{
		return $this->belongsTo(User::class);
	}

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
		return $this->BelongsToMany(Product::class)->withPivot(['quantity', 'size', 'color', 'age']);
	}
}
