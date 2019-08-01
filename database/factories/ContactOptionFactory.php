<?php

use Faker\Generator as Faker;

$factory->define(App\ContactOption::class, function (Faker $faker) {
    return [
        'subject' => $faker->words(3,true)
    ];
});
