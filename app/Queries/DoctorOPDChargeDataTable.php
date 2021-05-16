<?php

namespace App\Queries;

use App\Models\DoctorOPDCharge;
use Illuminate\Database\Query\Builder;

/**
 * Class DoctorOPDChargeDataTable
 *
 * @package App\Queries
 */
class DoctorOPDChargeDataTable
{
    /**
     * @return DoctorOPDCharge|Builder
     */
    public function get()
    {
        /** @var DoctorOPDCharge $query */
        $query = DoctorOPDCharge::with('doctor.user')->select('doctor_opd_charges.*')
            ->orderBy('created_at', 'desc');
        
        return $query;
    }
}
