<?php

use Faker\Generator as Faker;

$factory->define(App\Faq::class, function (Faker $faker) {
    return [
        'question'=>$faker->sentence($nnWords = 12, $variableNbWords = true) . '?',
        'answer'=>$faker->paragraph($nbSentences = 5, $variableNbSentences = true),
    ];
});
