<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Equipo;
use App\Models\Marca;
use Faker\Generator as Faker;

$factory->define(Equipo::class, function (Faker $faker) {
    return [
        'serial' => $faker->word,
        'tipo' => $faker->randomElement(['Ventilador de pared','portable','de pie']),
        'marca_id' => Marca::inRandomOrder()->value('id'),
        'caracteristica' => [
            "size" => $faker->randomElement(['pñ','md','gd']),
            "color" => $faker->colorName,
            "pais" => $faker->country,
        ]
    ];
});
