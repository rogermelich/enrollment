<?php

namespace Scool\Enrollment\Models;

use Acacha\Names\Traits\Nameable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Scool\Enrollment\Models\EnrollmentStudySubmodule;


class Enrollment extends Model implements Transformable
{
	use TransformableTrait, Nameable;
    protected $table = 'enrollments';
    protected $fillable = ['validate_state', 'finished_state', 'user_id', 'study_id', 'course_id', 'classroom_id'];
    protected $guarded = ['id'];

    public function details()
    {
        return $this->hasMany(EnrollmentStudySubmodule::class);
    }
}
