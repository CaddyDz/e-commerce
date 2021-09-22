<?php

declare(strict_types=1);

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Discount;
use Faker\Generator as Faker;

$factory->define(Discount::class, function (Faker $faker) {
    return [
        'expires_at' => now()->addDays(rand(1, 5)),
        'value' => rand(1, 50)
    ];
});
