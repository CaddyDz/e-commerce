<?php

declare(strict_types=1);

namespace App\Listeners;

class ValidateOrder
{
	/**
	 * Handle the event.
	 *
	 * @param object $event
	 * @return void
	 */
	public function handle($event)
	{
		if ($event->key == 'validate-order') {
			$event->resource->status = 'validated';
			$event->resource->save();
		}
	}
}
