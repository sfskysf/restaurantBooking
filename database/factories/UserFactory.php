<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use App\Table;
use App\User;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(Table::class, function (Faker $faker) {
    return [
        'table_number' => rand(1, 1000),
        'minimum_seats' => 2,
        'description' => $faker->sentence,

    ];
});


$factory->define(Booking::class, function (Faker $faker) {
    return [
        // 'table_id' => function(){

        //     return factory('App\Table')->create()->id;
        // },
        'booking_date' => Carbon::now()->addWeeks(rand(1, 27)),
        'seats_number' => 2,
        'name' => $faker->name,
        'email' => "wtf@wtf.com",
        'phone' => 011101012201,
        'status' => 'awaiting conformation'
    ];
});

