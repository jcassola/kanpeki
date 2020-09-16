<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->text,
        'picture' => $faker->text(100),
        'created_at' => now(),
    ];
});
