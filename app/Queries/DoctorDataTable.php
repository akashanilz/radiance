<?php

namespace App\Queries;

use App\Models\Doctor;
use Illuminate\Database\Query\Builder;

/**
 * Class CategoryDataTable.
 */
class DoctorDataTable
{
    /**
     * @param  array  $input
     *
     * @return Doctor|Builder
     */
    public function get($input = [])
    {
        /** @var Doctor $query */
        $query = Doctor::with('user')->select('doctors.*');

        $query->when(isset($input['status']) && $input['status'] != Doctor::STATUS_ALL,
            function (\Illuminate\Database\Eloquent\Builder $q) use ($input) {
                $q->whereHas('user', function ($q) use ($input) {
                    $q->where('status', '=', $input['status']);
                });
            });

        return $query;
    }
}
