<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    $uid = 0;
    return [
        'user_id'=>$uid,
        'content'=>$faker->paragraph(),
        'title'=>$faker->sentence(),
    ];
});
