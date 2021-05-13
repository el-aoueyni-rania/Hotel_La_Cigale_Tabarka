<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Reservation;
use App\Bienetre;
use App\User;
use Faker\Generator as Faker;

$factory->define(Bienetre::class, function (Faker $faker) {
    return [
        'Type_de_Bienetres_choisie' => $faker -> word(),
        'Description' => $faker -> paragraph(1),
        'prix' => $faker -> numberBetween($min = 10, $max = 70),
        'Picture'=>$faker ->imageUrl(),
        'user_id'=>User::get('id')->random(),
        'client_id'=>Reservation::get('id')->random(),
        'created_at' => now()

    ];
});


