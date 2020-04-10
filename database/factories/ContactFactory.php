<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\contact;
use Faker\Generator as Faker;

$factory->define(contact::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'email'=>$faker->unique()->safeEmail,
        'subject' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'message' => $faker->paragraph,
    ];
});