<?php

namespace App\Providers;

use App\Observers\OrderObserver;
use App\Observers\ProductsObserver;
use App\Order;
use App\Product;
use Illuminate\Support\ServiceProvider;

class ObserversServiceProvider extends ServiceProvider
{
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		Product::observe(ProductsObserver::class);
		Order::observe(OrderObserver::class);
	}
}
