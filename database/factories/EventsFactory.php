<?php

use Faker\Generator as Faker;

$factory->define(App\Events::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'description'=>$faker->paragraphs(5,true),
        'user_id'=>1,
        'start'=>$faker->date(),
        'end'=>$faker->date()
    ];
});
