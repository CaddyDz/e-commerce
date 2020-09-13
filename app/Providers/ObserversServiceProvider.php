<?php

declare(strict_types=1);

namespace App\Providers;

use App\Order;
use App\Product;
use App\Category;
use App\Observers\OrderObserver;
use App\Observers\CategoryObserver;
use App\Observers\ProductsObserver;
use Illuminate\Support\ServiceProvider;

class ObserversServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		Product::observe(ProductsObserver::class);
		Order::observe(OrderObserver::class);
		Category::observe(CategoryObserver::class);
	}
}
