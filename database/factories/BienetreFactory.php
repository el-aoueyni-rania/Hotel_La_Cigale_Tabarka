<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Reservation;
use App\Bienetre;
use App\Utlisateur;
use Faker\Generator as Faker;

$factory->define(Bienetre::class, function (Faker $faker) {
    return [
        'Type_de_Bienetres_choisie' => $faker -> word(),
        'Description' => $faker -> paragraph(),
        'prix' => $faker -> numberBetween($min = 10, $max = 70),
        'Picture'=>$faker ->imageUrl(),
        'utilisateur_id'=>Utlisateur::get('id')->random(),
<<<<<<< HEAD
        'client_id'=>Reservation::get('id')->random(),
=======
        'client_id'=>Reservation::random('id')->random(),
>>>>>>> eaff1b5e63c43165a4e9c6e35254697188206d22
        'created_at' => now()

    ];
});


