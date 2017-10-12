<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'location' => $faker->country,
        'theme' => $faker->sentence,
        'description' => $faker->realtext,
        'date' => $faker->date,
    ];
});
