<?php

namespace App\Queries;

use App\Models\BloodIssue;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class BloodIssueDatatable
 */
class BloodIssueDatatable
{
    /**
     * @return Builder
     */
    public function get()
    {
        return BloodIssue::with(['patient.user', 'doctor.user', 'blooddonor'])->select('blood_issues.*');
    }
}
