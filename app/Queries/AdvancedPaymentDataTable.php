<?php

namespace App\Queries;

use App\Models\AdvancedPayment;
use Illuminate\Database\Query\Builder;

/**
 * Class AdvancedPaymentDataTable.
 * @package App\Queries
 */
class AdvancedPaymentDataTable
{
    /**
     * @return AdvancedPayment|Builder
     */
    public function get()
    {
        /** @var AdvancedPayment $query */
        $query = AdvancedPayment::with('patient.user')->select('advanced_payments.*');

        return $query;
    }
}
