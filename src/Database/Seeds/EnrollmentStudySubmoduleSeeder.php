<?php

namespace Scool\Enrollment\Database\Seeds;

use Illuminate\Database\Seeder;
use Scool\Enrollment\Models\EnrollmentStudySubmodule;

class EnrollmentStudySubmoduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedEnrollment();
    }
    private function seedEnrollment()
    {
        factory(EnrollmentStudySubmodule::class, 10)->create();
    }
}