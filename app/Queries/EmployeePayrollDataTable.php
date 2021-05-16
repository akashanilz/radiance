<?php

namespace App\Queries;

use App\Models\EmployeePayroll;
use App\Models\User;
use Auth;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\Builder;
use Route;

/**
 * Class EmployeePayrollDataTable.
 */
class EmployeePayrollDataTable
{
    /**
     * @param  array  $input
     *
     * @return EmployeePayroll|\Illuminate\Database\Eloquent\Builder[]|Collection|Builder
     */
    public function get($input = [])
    {
        /** @var EmployeePayroll $query */
        $query = EmployeePayroll::with('owner.user')->select('employee_payrolls.*');

        $query->when(isset($input['status']) && $input['status'] != EmployeePayroll::STATUS_ALL,
            function (\Illuminate\Database\Eloquent\Builder $q) use ($input) {
                $q->where('status', '=', $input['status']);
            });

        /** @var User $user */
        $user = Auth::user();
        $route = Route::current()->getName();
        if (! ($route == 'payroll' && ! $user->hasRole(['Admin']))) {

            return $query;
        }
        $query->where('owner_id', $user->owner_id);
        $query->where('owner_type', $user->owner_type);

        return $query;
    }
}
