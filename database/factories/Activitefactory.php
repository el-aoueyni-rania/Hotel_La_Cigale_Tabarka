<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Activite;
use Faker\Generator as Faker;

$factory->define(Activite::class, function (Faker $faker) {
    return [
        'Nom_activités'=> $faker -> word(),
        'Date_activités' => $faker ->date,
        'Temps_activités' => $faker ->time,
        'user_id'=>User::get('id')->random(),
         'created_at' => now(),
    ];
});
