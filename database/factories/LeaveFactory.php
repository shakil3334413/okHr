<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Leave;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(Leave::class, function (Faker $faker) {
    return [
        'employee_id' => $faker->randomDigitNot(0),
        'reason' => $faker->text($maxNbChars = 200),
        'type' => 'casual',
        'from_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'to_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'leave_location' => $faker->address(),
        'leave_contact' => $faker->phoneNumber(),
        'status' => '0'
    ];
});
