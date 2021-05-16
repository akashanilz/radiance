<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallLog extends Model
{
    protected $table = 'call_logs';
    const INCOMING = 1;
    const OUTCOMING = 2;
    const CALLTYPE_ARR = [
        '0' => 'All',
        '1' => 'Incoming',
        '2' => 'Outgoing',
    ];

    protected $fillable = [
        'name',
        'phone',
        'date',
        'description',
        'follow_up_date',
        'note',
        'call_type',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
    ];
}
