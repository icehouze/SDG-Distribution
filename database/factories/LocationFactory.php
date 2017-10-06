<?php

use Faker\Generator as Faker;

$factory->define(App\Location::class, function (Faker $faker) {
    return [
    	'name' => $faker->company,
    	'note' => $faker->sentence,
    	'advertiser_status' => $faker->boolean,
    	'lodging_status' => $faker->boolean
    ];
});
