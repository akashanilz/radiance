<?php

namespace App\Queries;

use App\Models\OpdDiagnosis;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class OpdDiagnosisDataTable
 * @package App\Queries
 */
class OpdDiagnosisDataTable
{
    /**
     * @param  int  $opdPatientDepartmentId
     *
     * @return Builder
     */
    public function get($opdPatientDepartmentId)
    {
        return OpdDiagnosis::whereOpdPatientDepartmentId($opdPatientDepartmentId)->select('opd_diagnoses.*');
    }
}
