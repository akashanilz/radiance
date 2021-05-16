<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class IpdPayment extends Model implements HasMedia
{
    use HasMediaTrait;

    public const IPD_PAYMENT_PATH = 'ipd_payments';

    public $table = 'ipd_payments';

    public const PAYMENT_MODES_STRIPE = 3;

    const PAYMENT_MODES = [
        1 => 'Cash',
        2 => 'Cheque',
        3 => 'Stripe',
    ];
    public $fillable = [
        'ipd_patient_department_id',
        'payment_mode',
        'date',
        'notes',
        'amount',
        'transaction_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                        => 'integer',
        'ipd_patient_department_id' => 'integer',
        'payment_mode'              => 'integer',
        'date'                      => 'date',
        'amount'                    => 'integer',
        'transaction_id'            => 'integer',
        'notes'                     => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'payment_mode' => 'required',
        'date'         => 'required|date',
        'amount'       => 'required',
        'notes'        => 'nullable',
    ];

    /**
     * @var array
     */
    protected $appends = ['ipd_payment_document_url', 'payment_mode_name'];

    /**
     * @return mixed
     */
    public function getIpdPaymentDocumentUrlAttribute()
    {
        /** @var Media $media */
        $media = $this->media->first();
        if (! empty($media)) {
            return $media->getFullUrl();
        }

        return '';
    }

    /**
     *
     *
     * @return mixed
     */
    public function getPaymentModeNameAttribute()
    {
        return self::PAYMENT_MODES[$this->payment_mode];
    }
}
