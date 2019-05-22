<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Vartotojai;
use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker\Generator $faker) {

    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker()->safeEmail,
        'password' => $password ?: $password = bcrypt(''),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Vartotojai::class, function (Faker\Generator $faker) {

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName
       
    ];
});