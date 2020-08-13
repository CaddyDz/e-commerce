<?php

use App\Brand;
use App\Product;
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
			// Create 5 products for each brand
			factory(Product::class, 5)->create([
				'brand_id' => $brand->id,
			]);
		}
	}
}
