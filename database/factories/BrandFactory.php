<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition(): array
	{
		return [
						'name' => $this->faker->company,
		'logo' => 'brands/' . $this->faker->file(
			$sourceDir = 'public/assets/images/brands',
			$targetDir = storage_path('/app/public/brands'),
			false
		),
		];
	}
}
