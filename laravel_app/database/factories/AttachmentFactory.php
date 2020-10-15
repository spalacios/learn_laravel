<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Attachment;
use Faker\Generator as Faker;


$factory->define(Attachment::class, function (Faker $faker) {
    return [
        'path' => $faker->imageUrl(640,480,'food')
    ];
});


