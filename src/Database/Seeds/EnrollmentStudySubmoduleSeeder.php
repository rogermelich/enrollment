<?php

namespace Scool\Enrollment\Database\Seeds;

use Illuminate\Database\Seeder;
use Scool\Enrollment\Models\EnrollmentStudySubmodules\EnrollmentStudySubmodules;

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
        factory(EnrollmentStudySubmodules::class, 10)->create();
    }
}