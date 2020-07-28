<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;
use App\User;
use App\CustomerService;
use App\Service;

$factory->define(Payment::class, function (Faker $faker) {

    $user_ids = User::all()->pluck('id')->toArray();
    $customer_services = CustomerService::all();
    $customer_service = $faker->randomElement($customer_services);
    $customer_service_id = $customer_service['id'];
    $service = Service::find($customer_service_id);

    return [
        'user_id' => $faker->randomElement($user_ids),
        'customer_services_id' => $customer_service_id,
        'amount_received' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 99999999),
        'received_for_service' => $service['name'],
        'transaction_date' => $faker->dateTime,
        'current_due' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 99999999),
        'sms_sent_status' => $faker->boolean,
        'created_at' => now(),
        'updated_at' => now()
    ];

});
