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
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Scool\Enrollment\Models\Enrollment::class, function (Faker\Generator $faker) {
    return [
        'validate_state' => $faker->boolean(),
        'finished_state' => $faker->boolean(),
        'user_id' => $faker->randomDigit,
        'study_id' => $faker->randomDigit,
        'course_id' => $faker->randomDigit,
        'classroom_id' => $faker->randomDigit
    ];
});