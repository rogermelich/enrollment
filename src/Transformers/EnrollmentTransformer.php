<?php

namespace Scool\Enrollment\Transformers;

use League\Fractal\TransformerAbstract;
use Scool\Enrollment\Entities\Enrollment;

/**
 * Class EnrollmentTransformer
 * @package namespace Scool\Enrollment\Transformers;
 */
class EnrollmentTransformer extends TransformerAbstract
{

    /**
     * Transform the \Enrollment entity
     * @param \Enrollment $model
     *
     * @return array
     */
    public function transform(Enrollment $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */
            'validate_state' => (bool) $model->validate_state,
            'finished_state' => (bool) $model->finished_state,
            'user_id' => (int) $model->user_id,
            'study_id' => (int) $model->study_id,
            'course_id' => (int) $model->course_id,
            'classroom_id' => (int) $model->classroom_id,

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
