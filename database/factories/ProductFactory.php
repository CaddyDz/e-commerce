<?php

declare(strict_types=1);

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	return [
		'name' => $faker->unique()->realText(20),
		'description' => $faker->realText(1500),
		'price' => $faker->randomFloat(2, 1000, 10000),
		'image' => 'products/' . $faker->file(
			$sourceDir = 'public/assets/images/product/s328',
			$targetDir = storage_path('/app/public/products'),
			false
		),
		'available' => $faker->boolean($chancesOfGettingTrue = 90)
	];
});
