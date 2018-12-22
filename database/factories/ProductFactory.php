<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'slug' => $faker->unique()->name,
        'description' => $faker->text,
        'price' => $faker->numberBetween(20, 2000),
        'ratings' => $faker->numberBetween(1, 100),
    ];
});
