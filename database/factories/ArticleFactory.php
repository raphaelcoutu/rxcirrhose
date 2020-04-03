<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->words(3, true);

    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'summary' => $faker->text,
        'pharmacodynamics' => $faker->text,
        'references' => $faker->text,
        'active' => 1,
        'keywords' => $faker->words(6, true)
    ];
});
