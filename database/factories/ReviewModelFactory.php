<?php

$factory->define(Shed\Entities\Review::class, function (Faker\Generator $faker) {
    return [
        'user_id'      => function () {
            return factory(Shed\Entities\User::class)->create()->id;
        },
        'mechanist_id' => function (array $post) {
            return factory(Shed\Entities\Mechanist::class)->create([
                'user_id' => $post['user_id'],
            ])->id;
        },
        'review'       => $faker->numberBetween($min = 0, $max = 05),
        'note'         => $faker->text($maxNbChars = 200),
    ];
});

