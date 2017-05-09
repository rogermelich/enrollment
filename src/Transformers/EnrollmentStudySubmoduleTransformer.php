<?php

namespace Scool\Enrollment\Transformers;

use League\Fractal\TransformerAbstract;
use Scool\Enrollment\Models\EnrollmentStudySubmodule;

/**
 * Class EnrollmentTransformer
 * @package namespace Scool\Enrollment\Transformers;
 */
class EnrollmentStudySubmoduleTransformer extends TransformerAbstract
{

    /**
     * Transform the \Enrollment entity
     * @param \Enrollment $model
     *
     * @return array
     */
    public function transform(EnrollmentStudySubmodule $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */
            'enrollment_id' => (int) $model->enrollment_id,
            'module_id' => (int) $model->module_id,
            'study_submodule_id' => (int) $model->study_submodule_id,

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
