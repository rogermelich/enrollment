<?php

namespace Scool\Enrollment\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class EnrollmentStudySubmodule extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

}