<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\cats;
use Faker\Generator as Faker;

$factory->define(cats::class, function (Faker $faker) {
    return [
        'name' => 'business',
        'created_at' => now(),
        'pic' =>  $faker->image(public_path('img'),900,400, 'business', false)
    ];
});
