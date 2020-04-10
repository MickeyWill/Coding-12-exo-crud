<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\about;
use Faker\Generator as Faker;

$factory->define(about::class, function (Faker $faker) {
    $category =[
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife', 'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    return [
        'img_name'=>$faker->sentence(),
        'img_path'=>$faker->imageUrl(500, 300, $faker->randomElement($category)),
        'description'=>$faker->text(),
    ];
});