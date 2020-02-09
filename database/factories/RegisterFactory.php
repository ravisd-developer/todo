<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\register;
use Faker\Generator as Faker;

$factory->define(register::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "email" => $faker->unique()->safeEmail,
        "password" => "1234",
        "email_verified_at" => $faker->numberBetween(0,1),
        "remember_token" => "123",
    ];
});
