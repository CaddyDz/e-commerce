<?php

declare(strict_types=1);

namespace App\Listeners;

class SuspendOrder
{
	/**
	 * Handle the event.
	 *
	 * @param object $event
	 * @return void
	 */
	public function handle($event)
	{
		if ($event->key == 'suspend-order') {
			$event->resource->status = 'suspended';
			$event->resource->save();
		}
	}
}
