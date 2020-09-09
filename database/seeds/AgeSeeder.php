<?php

use App\Age;
use Illuminate\Database\Seeder;

class AgeSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for ($i = 6; $i < 60; $i++) {
			Age::create([
				'value' => $i
			]);
		}
	}
}
