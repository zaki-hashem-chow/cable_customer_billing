<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {

    return[
        'name'  =>  $faker->company,
        'logo'  =>  $faker->imageUrl($width = 640, $height = 480),
        'address'  => $faker->address,
        'phone_num_1'  => $faker->e164PhoneNumber,
        'phone_num_2'  => $faker->e164PhoneNumber,
        'bkash_1'  => $faker->e164PhoneNumber,
        'bkash_2'  => $faker->e164PhoneNumber,
        'email'  => $faker->companyEmail,
        'website'  => $faker->domainName,
        'file_server'  => $faker->url,
        'created_at'    => $faker->dateTime,
        'updated_at'     => $faker->dateTime,
    ];
});
