<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'  => $faker->name,
        'email' => $faker->safeEmail,
        //use bcrypt('password') if you want to assert for a specific password, but it might slow down your tests
        'password' => str_random(10),
    ];
});

$factory->define(App\PasswordReset::class, function (Faker\Generator $faker) {
    return [
        'email'  => $faker->safeEmail,
        'token' => str_random(10),
    ];
});

$factory->define(App\Course::class, function (Faker\Generator $faker) {
    return [
        'code' => str_random(6),
        'name' => $faker->firstName,
        'details' => $faker->text(100)
    ];
});

$factory->define(App\Faculty::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->randomNumber(2),
        'name_th' => $faker->firstName,
        'name_en' => $faker->lastName
    ];
});

$factory->define(App\Semester::class, function (Faker\Generator $faker) {
    return [
        'semester' => 1,
        'year' => $faker->year,
        'in_use' => 1
    ];
});

$factory->define(App\Section::class, function (Faker\Generator $faker) {
    return [
        'course_id' => str_random(6),
        'code' => $faker->firstName,
        'semester_id' => $faker->text(100)
    ];
});

$factory->define(App\Homework::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'details' => $faker->text(100),
        'assign_date' => $faker->dateTime,
        'due_date' => $faker->dateTime,
        'accept_date' => $faker->dateTime,
    ];
});