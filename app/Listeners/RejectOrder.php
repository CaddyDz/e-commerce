<?php

namespace App\Listeners;

class RejectOrder
{
	/**
	 * Handle the event.
	 *
	 * @param object $event
	 * @return void
	 */
	public function handle($event)
	{
		if ($event->key == 'reject-order') {
			$event->resource->status = 'rejected';
			$event->resource->save();
		}
	}
}
