<?php

namespace App\Queries;

use App\Models\Brand;
use Illuminate\Support\Collection;

/**
 * Class DepartmentsDataTable
 * @package App\Queries
 */
class BrandDataTable
{
    /**
     * @return Collection
     */
    public function get()
    {
        $query = Brand::query();

        return $query;
    }
}
