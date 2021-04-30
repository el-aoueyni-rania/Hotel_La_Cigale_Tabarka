<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Utlisateur;
use Faker\Generator as Faker;

$factory->define(Utlisateur::class, function (Faker $faker) {
    return [
        'name' => $faker ->word(),
        'email' => $faker ->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
        'password'=> $faker -> bothify('LaCigale ##??')
    ];
});
