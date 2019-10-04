<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\User;
use App\news;
$factory->define(news::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'created_at' => now(),
        'cat_id' => 3,
        'pic' =>  $faker->image(public_path('img'),600,450, 'fashion', false)
        
    ];
});
