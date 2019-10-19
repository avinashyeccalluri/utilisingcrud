<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Test;

// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//         'remember_token' => Str::random(10),
//     ];
// });
$factory->define(App\Test::class, function (Faker $faker) {
    return [
        'employee_name' => $faker->name,
        'employee_spouse_name' => $faker->name,

    ];
});
