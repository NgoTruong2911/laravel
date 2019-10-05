<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $warehouse = App\Models\Warehouse::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'description' => $faker->text(200),
        'price' => $faker->randomFloat(3,0,100000),
        'amount' => $faker->numberBetween($min = 0, $max = 9000),
        'warehouse_id' => $faker->randomElement($warehouse)

    ];
});
