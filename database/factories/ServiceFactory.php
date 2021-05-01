<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use App\Utlisateur;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'type' => $faker->sentence(4),
        'utlisateur_id'=> Utlisateur::get('id')->random(),
        'created_at' => now()
    ];
});
