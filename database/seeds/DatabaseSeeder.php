<?php

use App\Nova\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(RolesAndPermissionsSeeder::class);
		$this->call(UserSeeder::class);
		$this->call(OrderSeeder::class);
		// Have to seed brands first, necessary to create products
		$this->call(CategorySeeder::class);
		$this->call(BrandSeeder::class);
		$this->call(ProductSeeder::class);
		$this->call(DiscountSeeder::class);
		$this->call(SizeSeeder::class);
		$this->call(ColorSeeder::class);
		$this->call(ShippingSeeder::class);
		
	}
}
