<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Shed\Entities\User::class, function (Faker\Generator $faker) {
    static $token;
    static $password;
    static $provider = "facebook";
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'token' => $token ?: $token = bcrypt('secret'),
        'remember_token' => str_random(10),
        'provider' => $provider,
        'provider_id' => $faker->randomNumber($nbDigits = NULL)
    ];
});