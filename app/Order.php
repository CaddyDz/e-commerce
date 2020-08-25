<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

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
}
