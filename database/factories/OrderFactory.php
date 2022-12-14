<?php

declare(strict_types=1);

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
	return [
		'status' => $faker->randomElement(['pending', 'rejected', 'validated', 'suspended']),
	];
});
