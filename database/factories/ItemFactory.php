<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'picture' => $faker->text(100),
        'description' => $faker->text,
        'price' => $faker->boolean,
    ];
});
