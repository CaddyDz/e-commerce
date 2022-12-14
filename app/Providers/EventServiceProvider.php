<?php

declare(strict_types=1);

namespace App\Providers;

use NovaButton\Events\ButtonClick;
use Illuminate\Auth\Events\Registered;
use App\Listeners\{RejectOrder, SuspendOrder, ValidateOrder};
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
	/**
	 * The event listener mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		Registered::class => [
			SendEmailVerificationNotification::class,
		],
		ButtonClick::class => [
			ValidateOrder::class,
			SuspendOrder::class,
			RejectOrder::class,
		],
	];

	/**
	 * Register any events for your application.
	 *
	 * @return void
	 */
	public function boot()
	{
		parent::boot();

		//
	}
}
