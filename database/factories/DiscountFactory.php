<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                    'expires_at' => now()->addDays(rand(1, 5)),
        'value' => rand(1, 50)
        ];
    }
}
