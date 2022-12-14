<?php

declare(strict_types=1);

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Color::factory(100)->create();
	}
}
