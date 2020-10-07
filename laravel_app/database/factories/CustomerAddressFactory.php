<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CustomerAddress;
use Faker\Generator as Faker;

$factory->define(CustomerAddress::class, function (Faker $faker) {
    return [
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'zip' => substr($faker->postcode, 0, 5)
    ];
});
