<?php

declare(strict_types=1);

use App\{Brand, Product};
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Storage::disk('public')->deleteDirectory('products');
		Storage::disk('public')->makeDirectory('products');
		foreach (Brand::all() as $brand) {
			// Create 2 products for each brand
			factory(Product::class, 2)->create([
				'brand_id' => $brand->id,
			]);
		}
	}
}
