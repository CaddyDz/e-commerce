<?php

declare(strict_types=1);

use App\Product;
use App\Discount;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$products = Product::take(20)->select('id')->pluck('id');
		foreach ($products as $product) {
			factory(Discount::class)->create([
				'product_id' => $product,
			]);
		}
	}
}
