<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RadiologyCategory
 * @package App\Models
 * @version April 11, 2020, 7:08 am UTC
 *
 * @property string name
 */
class RadiologyCategory extends Model
{
    public $table = 'radiology_categories';

    public $fillable = [
        'name',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'   => 'integer',
        'name' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|unique:radiology_categories,name',
    ];
}
