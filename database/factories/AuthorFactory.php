<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'nick' => $faker->unique()->nick,
        'picture' => $faker->text(100),
        'description' => $faker->text,
        'category' => $faker->text,
    ];
});
