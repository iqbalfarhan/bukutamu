<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tamu;
use Faker\Generator as Faker;

$factory->define(Tamu::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'phone' => $faker->phoneNumber,
		'meet_who' => $faker->name,
		'purpose' => $faker->sentence(1),
		'photo' => "photo/",
	];
});
