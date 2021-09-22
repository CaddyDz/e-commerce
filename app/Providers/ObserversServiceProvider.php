<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{Category, Order, Product};
use App\Observers\{CategoryObserver, OrderObserver, ProductsObserver};

class ObserversServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        Product::observe(ProductsObserver::class);
        Order::observe(OrderObserver::class);
        Category::observe(CategoryObserver::class);
    }
}
