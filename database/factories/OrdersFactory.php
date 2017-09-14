<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'number' => $faker->phoneNumber,
        'amount' => $faker->biasedNumberBetween(1,3)
    ];
});
