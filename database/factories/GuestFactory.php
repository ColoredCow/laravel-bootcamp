<?php

use Faker\Generator as Faker;

$factory->define(App\Guest::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'city' => $faker->city
    ];
});
