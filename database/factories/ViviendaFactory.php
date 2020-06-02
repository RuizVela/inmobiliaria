<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\propietario;
use App\vivienda;
use Faker\Generator as Faker;

$factory->define(vivienda::class, function (Faker $faker) {
    return [
        'precio'=>$faker->numberBetween(20000,6000000),
        'superficie'=>$faker->numberBetween(30,200),
        'habitaciones'=>$faker->numberBetween(1,5),
        'construcción'=>$faker->year(),
        'amueblado'=>$faker->boolean(),
        'propietario_id'=>propietario::all()->random()->id
    ];
});
