<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use App\User;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'type' => $faker->sentence(1),
        'user_id'=> User::get('id')->random(),
        'created_at' => now()
    ];
});
