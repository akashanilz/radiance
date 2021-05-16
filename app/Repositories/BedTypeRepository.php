<?php

namespace App\Repositories;

use App\Models\BedType;

/**
 * Class BedTypeRepository
 * @package App\Repositories
 * @version February 17, 2020, 8:08 am UTC
 */
class BedTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BedType::class;
    }
}
