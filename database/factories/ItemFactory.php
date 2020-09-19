<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'picture' => $faker->md5().".jpg",
        'description' => $faker->text,
        'price' => $faker->randomFloat(2, 0, 100),
    ];
});
