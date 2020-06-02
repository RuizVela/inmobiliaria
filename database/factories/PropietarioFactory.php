<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\propietario;
use Faker\Generator as Faker;

$factory->define(propietario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellidos' => $faker->name,
        'telefono' => $faker->phoneNumber,
    ];
});
