<?php

namespace App\Queries;

use App\Models\IpdPatientDepartment;
use Illuminate\Database\Query\Builder;

/**
 * Class IpdPatientDepartmentDataTable.
 */
class IpdPatientDepartmentDataTable
{
    /**
     * @return IpdPatientDepartment|Builder
     */
    public function get($input = [])
    {
        /** @var IpdPatientDepartment $query */
        $query = IpdPatientDepartment::with([
            'patient.user', 'doctor.user', 'bed', 'bill',
        ])
            ->when(isset($input['status']), function ($q) use ($input) {
                $q->where('bill_status', '=', $input['status']);
            })->select('ipd_patient_departments.*');

        return $query;
    }
}
