<?php

namespace App\Queries;

use App\Models\Postal;
use Illuminate\Database\Query\Builder;
use Route;

/**
 * Class PostalDataTable.
 */
class PostalDataTable
{
    /**
     * @return Postal|Builder
     */
    public function get()
    {
        /**
         * @var Postal $query
         */
        if (Route::current()->getName() == 'receives.index') {
            $query = Postal::query()->select('postals.*')->where('type', '=', Postal::POSTAL_RECEIVE);
        }

        if (Route::current()->getName() == 'dispatches.index') {
            $query = Postal::query()->select('postals.*')->where('type', '=', Postal::POSTAL_DISPATCH);
        }
        return $query;
    }
}
