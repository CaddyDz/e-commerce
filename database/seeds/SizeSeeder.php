<?php

use App\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$sizes = [
			's' => 'Small',
			'm' => 'Medium',
			'l' => 'Large',
			'xl' => 'Extra Large',
			'xxl' => 'Double Extra Large',
		];
		foreach ($sizes as $key => $value) {
			Size::create([
				'code' => $key,
				'label' => $value,
			]);
		}
	}
}
