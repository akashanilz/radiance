<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IpdBill extends Model
{
    public $table = 'ipd_bills';

    public $fillable = [
        'ipd_patient_department_id',
        'total_charges',
        'total_payments',
        'gross_total',
        'discount_in_percentage',
        'tax_in_percentage',
        'other_charges',
        'net_payable_amount',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                        => 'integer',
        'ipd_patient_department_id' => 'integer',
        'total_charges'             => 'integer',
        'total_payments'            => 'integer',
        'gross_total'               => 'integer',
        'discount_in_percentage'    => 'integer',
        'tax_in_percentage'         => 'integer',
        'other_charges'             => 'integer',
        'net_payable_amount'        => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ipd_patient_department_id' => 'required',
        'total_payments'            => 'required',
        'gross_total'               => 'required',
        'discount_in_percentage'    => 'required',
        'tax_in_percentage'         => 'required',
        'other_charges'             => 'required',
        'net_payable_amount'        => 'required',
    ];

    /**
     * @return hasOne
     */
    public function ipdPatient()
    {
        return $this->belongsTo(IpdPatientDepartment::class, 'ipd_patient_department_id');
    }

}
