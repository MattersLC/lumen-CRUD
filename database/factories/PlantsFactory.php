<?php 

use Faker\Generator as Faker;

$factory->define(App\plants::class, function (Faker $faker){
    return [
        'nombre' => $faker->sentence,
        'tipo' => $faker->sentence,
        'origen' => $faker->sentence,
    ];
});