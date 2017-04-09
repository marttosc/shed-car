<?php

$factory->define(Shed\Entities\Mechanist::class, function (Faker\Generator $faker) {
    return [
        'user_id'    => function () {
            return factory(Shed\Entities\User::class)->create()->id;
        },
        'is_owner'   => $faker->boolean,
        'name'       => $faker->name,
        'address'    => $faker->streetName,
        'number'     => $faker->buildingNumber,
        'complement' => $faker->secondaryAddress,
        'zipcode'    => $faker->postcode,
        'city'       => $faker->city,
        'state'      => $faker->stateAbbr,
        'location'   => [$faker->latitude($min = -90, $max = 90), $faker->longitude($min = -180, $max = 180)],
        'telephone'  => $faker->cellphone,
    ];
});


