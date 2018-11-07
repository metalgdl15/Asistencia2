<?php

use Faker\Generator as Faker;

$factory->define(App\Materia::class, function (Faker $faker) {
    return [
        'materia' => $faker->setence(5),
        'seccion' => 'D0'.$faker->randomDigit,
        'crn' => $faker-randomNumber(5),
        'salon' => 'A113'
    ];
});
