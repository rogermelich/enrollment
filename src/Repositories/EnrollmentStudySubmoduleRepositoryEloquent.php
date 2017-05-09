<?php

namespace Scool\Enrollment\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Scool\Enrollment\Models\EnrollmentStudySubmodule;
use Scool\Enrollment\Repositories\EnrollmentStudySubmoduleRepository;
use Scool\Enrollment\Validators\EnrollmentStudySubmoduleValidator;


/**
 * Class EnrollmentRepositoryEloquent
 * @package namespace Scool\Enrollment\Repositories;
 */
class EnrollmentStudySubmoduleRepositoryEloquent extends BaseRepository implements EnrollmentStudySubmoduleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return EnrollmentStudySubmodule::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return EnrollmentStudySubmoduleValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
