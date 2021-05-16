<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PathologyCategory
 * @package App\Models
 * @version April 11, 2020, 5:39 am UTC
 *
 * @property string name
 */
class PathologyCategory extends Model
{
    public $table = 'pathology_categories';

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
        'name' => 'required|unique:pathology_categories,name',
    ];
}
