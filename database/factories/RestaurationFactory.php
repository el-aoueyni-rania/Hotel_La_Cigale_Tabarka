<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restauration;
use App\Utlisateur;
use Faker\Generator as Faker;

$factory->define(Restauration::class, function (Faker $faker) {
    return [
        'nom_restaurant' => $faker ->word(),
        'menu' => $faker ->sentence(),
        'fruits'=> $faker -> sentence(),
        'boissons'=> $faker -> sentence(),
        'utlisateur_id'=> Utlisateur::get('id')->random(),
        'created_at' => now()
        
    ];
});
