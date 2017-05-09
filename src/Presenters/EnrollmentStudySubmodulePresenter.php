<?php

namespace Scool\Enrollment\Presenters;

use Scool\Enrollment\Transformers\EnrollmentStudySubmoduleTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class EnrollmentPresenter
 *
 * @package namespace Scool\Enrollment\Presenters;
 */
class EnrollmentStudySubmodulePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new EnrollmentStudySubmoduleTransformer();
    }
}
