<?php

namespace App\Queries;

use App\Models\AmbulanceCall;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class AmbulanceCallDataTable
 * @package App\Queries
 */
class AmbulanceCallDataTable
{
    /**
     * @return Builder
     */
    public function get()
    {
        $query = AmbulanceCall::with(['patient.user', 'ambulance']);

        return $query->select('ambulance_calls.*');
    }
}
