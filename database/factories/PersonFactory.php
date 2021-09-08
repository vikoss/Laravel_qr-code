<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ModelsGraduationPhotos\Person;
use Faker\Generator as Faker;

$factory->define(App\ModelsGraduationPhotos\Person::class, function (Faker $faker) {
    return [
        'name'  => $faker->name(),
        'first_surname' => $faker->name(),
        'second_surname'    => $faker->name(),
        'phone' => $faker->phoneNumber(),
    ];
});
