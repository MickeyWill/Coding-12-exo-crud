<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\testimonial;
use Faker\Generator as Faker;

$factory->define(testimonial::class, function (Faker $faker) {
    $people=['people'];
    return [
        'name'=>$faker->name,
        'img_path'=>$faker->imageUrl(500, 300, $faker->randomElement($people)),
        'description'=>$faker->text(),
    ];
});
