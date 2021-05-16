<?php

namespace App\Queries;

use App\Models\IpdPayment;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class IpdPaymentDataTable
 * @package App\Queries
 */
class IpdPaymentDataTable
{
    /**
     * @param  int  $ipdPatientDepartmentId
     *
     * @return Builder
     */
    public function get($ipdPatientDepartmentId)
    {
        return IpdPayment::whereIpdPatientDepartmentId($ipdPatientDepartmentId)->select('ipd_payments.*');
    }
}
