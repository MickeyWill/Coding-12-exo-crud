<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\portfolio;
use Faker\Generator as Faker;

$factory->define(portfolio::class, function (Faker $faker) {
    $category =[
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife', 'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    return [
        'img_name'=>$faker->name,
        'description'=>$faker->sentence(),
        'img_path'=>$faker->imageUrl(500, 300, $faker->randomElement($category)),
    ];
});
