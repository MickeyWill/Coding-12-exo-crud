<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\team;
use Faker\Generator as Faker;

$factory->define(team::class, function (Faker $faker) {
    $category=['people'];
    return [
        'name'=>$faker->name,
        'img_path'=>$faker->imageUrl(500, 300, $faker->randomElement($category)),
        'description'=>$faker->sentence(),
    ];
});
