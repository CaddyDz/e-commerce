<?php

declare(strict_types=1);

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'logo' => 'brands/' . $faker->file(
            $sourceDir = 'public/assets/images/brands',
            $targetDir = storage_path('/app/public/brands'),
            false
        ),
    ];
});
