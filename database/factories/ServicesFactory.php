<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Service::class, function (Faker $faker) {

    return [
        'name' => Str::random(10),
        'rate' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 99999),
        'created_at' => now(),
        'updated_at' => now()
    ];

});
