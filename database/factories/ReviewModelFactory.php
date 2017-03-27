<?php

$factory->define(Shed\Entities\Review::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 0, $max = 99),
        'mechanist_id' => $faker->numberBetween($min = 0, $max = 99),
        'review' => $faker->numberBetween($min = 0, $max = 05),
        'note' => $faker->text($maxNbChars = 200)
    ];
});

