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
$factory->define(Scool\Enrollment\Models\EnrollmentStudySubmodule::class, function (Faker\Generator $faker) {
    return [
        'enrollment_id' => $faker->randomDigit,
        'module_id' => $faker->randomDigit,
        'study_submodule_id' => $faker->randomDigit,
    ];
});