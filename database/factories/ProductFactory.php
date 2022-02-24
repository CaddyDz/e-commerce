<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->realText(20),
        'description' => $this->faker->realText(1500),
        'price' => $this->faker->randomFloat(2, 1000, 10000),
        'image' => 'products/' . $this->faker->file(
            $sourceDir = 'public/assets/images/product/s328',
            $targetDir = storage_path('/app/public/products'),
            false
        ),
        'available' => $this->faker->boolean($chancesOfGettingTrue = 90)
        ];
    }
}
