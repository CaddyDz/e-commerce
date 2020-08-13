<?php

use App\Discount;
use App\Product;
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
		$products = Product::select('id')->pluck('id');
		foreach ($products as $product) {
			factory(Discount::class, rand(1, 5))->create([
				'product_id' => $product->id,
			]);
		}
	}
}
