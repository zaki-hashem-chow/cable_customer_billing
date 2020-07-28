<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'type' => $faker->boolean,
        'dob' => $faker->date,
        'area' => $faker->streetSuffix,
        'street' => $faker->streetName,
        'address' => $faker->address,
        'phone_num_1' => $faker->e164PhoneNumber,
        'phone_num_2' => $faker->e164PhoneNumber,
        'note' => $faker->text($maxNbChars = 255),
        'email_verified_at' => now(),
        'password' => '$2y$12$wr9eBQRbOhLPwXXmNXHzpeFJfxtrJWM3R9Mz/sz3UxYhhXUQIV1tO',
        'created_at' => now(),
        'updated_at' => now()
    ];
});
