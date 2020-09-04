<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use Gloudemans\Shoppingcart\Facades\Cart;

class ViewComposerServiceProvider extends ServiceProvider
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
		view()->composer('layouts.app', fn ($view) => $view->with('cart', Cart::content()));
		view()->composer('layouts.app', fn ($view) => $view->with('categories', Category::all()));
	}
}
