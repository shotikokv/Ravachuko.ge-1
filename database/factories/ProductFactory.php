<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'description' => $faker->text,
        'price' => $faker->numberBetween(20, 2000),
        'rating' => $faker->numberBetween(1, 100),
    ];
});
