<?php

$factory->define(Shed\Entities\Mechanist::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 0, $max = 99),
        'is_owner' => $faker->numberBetween($min = 0, $max = 99),
        'name' => $faker->name,
        'address' => $faker->streetName,
        'number' => $faker->buildingNumber,
        'complement' => $faker->secondaryAddress,
        'zipcode' => $faker->postcode,
        'city' => $faker->city,
        'state' => $faker->state,
        'location' => [$faker->latitude($min = -90, $max = 90), $faker->longitude($min = -180, $max = 180)]
        ,
        'telephone' => $faker->tollFreePhoneNumber
    ];
});


