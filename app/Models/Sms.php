<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sms extends Model
{
    protected $table = 'sms';

    public $fillable = ['send_to', 'phone_number', 'message', 'send_by', 'region_code'];

    const ROLE_TYPES = [
        1 => 'Doctor',
        2 => 'Accountant',
        3 => 'Nurse',
        4 => 'LabTechnician',
        5 => 'Receptionist',
        6 => 'Pharmacist',
        7 => 'Case Handler',
        8 => 'Patient',
    ];

    const CLASS_TYPES = [
        1 => Doctor::class,
        2 => Accountant::class,
        3 => Nurse::class,
        4 => LabTechnician::class,
        5 => Receptionist::class,
        6 => Pharmacist::class,
        7 => CaseHandler::class,
        8 => Patient::class,
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'      => 'integer',
        'message' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'message' => 'required|max:160',
    ];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'send_to');
    }

    /**
     * @return BelongsTo
     */
    public function sendBy()
    {
        return $this->belongsTo(User::class, 'send_by');
    }
}
