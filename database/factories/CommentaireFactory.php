<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Commentaire;
use Faker\Generator as Faker;

$factory->define(Commentaire::class, function (Faker $faker) {
    return [
        'message' => $faker->text,
    ];
});
