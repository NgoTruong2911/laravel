<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->streetAddress,
        'phone_number' => $faker->e164PhoneNumber,
        'start_time_work' => "7:00:00",
        'end_time_work' => "22:00:00"
    ];
});
