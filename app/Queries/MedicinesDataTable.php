<?php

namespace App\Queries;

use App\Models\Medicine;

/**
 * Class DepartmentsDataTable
 * @package App\Queries
 */
class MedicinesDataTable
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function get()
    {
        return Medicine::with('brand')->select('medicines.*');
    }
}
