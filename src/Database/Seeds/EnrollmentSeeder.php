<?php

namespace Scool\Enrollment\Database\Seeds;

use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EnrollmentTableSeeder::class);
        $this->call(EnrollmentStudySubmoduleTableSeeder::class);
        $this->call(EnrollmentPermissionsTableSeeder::class);
    }
}
