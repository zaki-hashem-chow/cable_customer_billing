<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CustomerService;
use Faker\Generator as Faker;
use App\User;
use App\Service;

$factory->define(CustomerService::class, function (Faker $faker) {

    $user_ids = User::all()->pluck('id')->toArray();
    $service_ids = Service::all()->pluck('id')->toArray();

    return [
        'user_id' => $faker->randomElement($user_ids),
        'services_id' => $faker->randomElement($service_ids),
        'discount' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 99999),
        'service_start_date' => $faker->date,
        'connection_status' => $faker->boolean,
        'billing_date' => $faker->date,
        'created_at' => now(),
        'updated_at' => now()
    ];

});
