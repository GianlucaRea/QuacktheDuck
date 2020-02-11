<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->word(10),
        'surname' => $faker->text(10),
        'email' => $faker->word(50),
        'password' => $faker->password(10),
        'university' => $faker->word(10),
        'course' => $faker->word(10),

    ];
});
