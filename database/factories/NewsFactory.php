<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'text' => $faker->text,
        'picture' => $faker->text(100),
        'created_at' => now(),
    ];
});
