<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drug;
use Faker\Generator as Faker;

$factory->define(Drug::class, function (Faker $faker) {
    return [
        'article_id' => 1,
        'name' => $faker->word,
        'childA_category' => 1,
        'childA_text' => 'Text modifiée',
        'childB_category' => 1,
        'childB_text' => null,
        'childC_category' => 1,
        'childC_text' => null,
        'absorption' => $faker->text,
        'distribution' => $faker->text,
        'metabolisme' => $faker->text,
        'elimination' => $faker->text,
        'official' => $faker->text,
        'litterature' => $faker->text,
        'active' => 1
    ];
});
