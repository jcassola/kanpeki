<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'nick' => $faker->unique()->name,
        'picture' => $faker->md5().".jpg",
        'description' => $faker->text,
        'category' => $faker->randomElement(array('Música', 'Dibujo', 'Videos')),
    ];
});
