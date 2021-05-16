<?php

namespace App\Queries;

use App\Models\IpdConsultantRegister;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class IpdConsultantRegisterDataTable
 * @package App\Queries
 */
class IpdConsultantRegisterDataTable
{
    /**
     * @param  int  $ipdPatientDepartmentId
     *
     * @return Builder
     */
    public function get($ipdPatientDepartmentId)
    {
        return IpdConsultantRegister::with('doctor.user')->where('ipd_patient_department_id', $ipdPatientDepartmentId)
            ->select('ipd_consultant_registers.*');
    }
}
