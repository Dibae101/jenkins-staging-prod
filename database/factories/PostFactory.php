<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->text,
        'user_id' => 1
    ];
});



// use App\Model;
// use App\Post;
// use Faker\Generator as Faker;

// $factory->define(Post::class, function (Faker\Generator $faker, array $attributes = []) {
//     return [
//         'title' => $faker->text(20),
//         'body' => $faker->text,

//     ];
// });