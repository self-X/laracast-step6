<?php

use Faker\Generator as Faker;



$factory->define(App\lesson::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'published_at' => $faker->dateTime(),
    ];
});
