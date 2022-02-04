<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
         'Titolo' => $faker->words(1, true),
         'sottotitolo' => $faker->words(3, true),
         'autore' => $faker->name($gender = null|'male'|'female'),     
         'contenuto_post' => $faker->paragraph(),
         'creato_alle' => $faker->dateTime(),
    ];
});
