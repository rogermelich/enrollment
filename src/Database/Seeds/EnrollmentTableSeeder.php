<?php

namespace Scool\Enrollment\Database\Seeds;

use Illuminate\Database\Seeder;
use Scool\Enrollment\Models\Enrollment;

class EnrollmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Enrollment::class, 10)->create();
    }
}