<?php

namespace Scool\Enrollment\Database\Seeds;

use Illuminate\Database\Seeder;
use Scool\Enrollment\Models\EnrollmentStudySubmodule;

class EnrollmentStudySubmoduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EnrollmentStudySubmodule::class, 10)->create();
    }
}