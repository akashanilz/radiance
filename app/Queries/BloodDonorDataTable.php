<?php

namespace App\Queries;

use App\Models\BloodDonor;

/**
 * Class BloodDonorDataTable
 * @package App\Queries
 */
class BloodDonorDataTable
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function get()
    {
        $query = BloodDonor::query();

        return $query;
    }
}
