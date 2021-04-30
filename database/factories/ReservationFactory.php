<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reservation;
use App\Utlisateur;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'Client_name'=> $faker -> word(),
        'date_arrivee' => $faker ->date,
        'nbr_nuits' => $faker ->randomDigit,
        'nbr_chambres'  => $faker ->randomDigit,
        'nbr_adultes'  => $faker ->randomDigit,
        'nbr_enfants'  => $faker ->randomDigit,
        'utilisateur_id'=>Utlisateur::get('id')->random(),
         'created_at' => now()

    ];
});
