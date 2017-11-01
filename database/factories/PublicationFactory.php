<?php

use Faker\Generator as Faker;

$factory->define(App\Publication::class, function (Faker $faker) {
    return [
		'market_id' => $faker->numberBetween($min = 1, $max = 11),
		'publication_type_id' => $faker->numberBetween($min = 1, $max = 3),
		'year' => $faker->year($max = 'now'),
		'print' => $faker->optional()->numberBetween($min = 1, $max = 2),
		'cover' => $faker->optional()->realText($maxNbChars = 25)
	];
});
