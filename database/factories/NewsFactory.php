<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence($nbWords = 5, $variableNbWords = true),
        'content'=>$faker->paragraphs($nb = 5, $asText = true),
        'slug'=>$faker->slug(),
        'user_id'=>1,
    ];
});
