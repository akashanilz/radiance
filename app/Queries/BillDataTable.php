<?php

namespace App\Queries;

use App\Models\Bill;
use App\Models\User;
use Auth;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class BillDataTable
 * @package App\Queries
 */
class BillDataTable
{
    /**
     * @return Builder
     */
    public function get()
    {
        $query = Bill::with(['patient.user'])->select('bills.*');

        /** @var User $user */
        $user = Auth::user();
        if ($user->hasRole('Patient')) {
            $query->where('patient_id', $user->owner_id);
        }

        return $query;
    }
}
