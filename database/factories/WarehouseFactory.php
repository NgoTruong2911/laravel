<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Warehouse;
use Faker\Generator as Faker;

$factory->define(Warehouse::class, function (Faker $faker) {
    $users = App\Models\User::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'address' => $faker->streetAddress,
        'phone_number' => $faker->e164PhoneNumber,
        'stockkeeper_id' => $faker->randomElement($users)

    ];
});
