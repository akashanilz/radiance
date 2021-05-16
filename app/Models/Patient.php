<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Carbon;

/**
 * Class Patient
 *
 * @package App\Models
 * @version February 14, 2020, 5:53 am UTC
 * @property integer user_id
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static Builder|Patient newModelQuery()
 * @method static Builder|Patient newQuery()
 * @method static Builder|Patient query()
 * @method static Builder|Patient whereCreatedAt($value)
 * @method static Builder|Patient whereId($value)
 * @method static Builder|Patient whereUpdatedAt($value)
 * @method static Builder|Patient whereUserId($value)
 * @mixin Model
 */
class Patient extends Model
{
    public $table = 'patients';
    public $fillable = [
        'user_id',
    ];

    const STATUS_ALL = 2;
    const ACTIVE = 1;
    const INACTIVE = 0;

    const STATUS_ARR = [
        self::STATUS_ALL => 'All',
        self::ACTIVE     => 'Active',
        self::INACTIVE   => 'Deactive',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'      => 'integer',
        'user_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required',
        'last_name'  => 'required',
        'email'      => 'required|email|unique:users,email',
        'password'   => 'nullable|same:password_confirmation|min:6',
        'gender'     => 'required',
        'dob'        => 'nullable|date',
        'phone'      => 'nullable|numeric',
    ];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     *
     * @return MorphOne
     */
    public function address()
    {
        return $this->morphOne(Address::class, 'owner');
    }

    /**
     * @return HasMany
     */
    public function cases()
    {
        return $this->hasMany(PatientCase::class, 'patient_id');
    }

    /**
     * @return HasMany
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'patient_id');
    }

    /**
     * @return HasMany
     */
    public function admissions()
    {
        return $this->hasMany(PatientAdmission::class, 'patient_id');
    }

    /**
     * @return HasMany
     */
    public function bills()
    {
        return $this->hasMany(Bill::class, 'patient_id');
    }

    /**
     * @return HasMany
     */
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'patient_id');
    }

    /**
     * @return HasMany
     */
    public function advancedpayments()
    {
        return $this->hasMany(AdvancedPayment::class, 'patient_id');
    }

    /**
     * @return HasMany
     */
    public function documents()
    {
        return $this->hasMany(Document::class, 'patient_id');
    }

    /**
     * @return HasMany
     */
    public function vaccinations()
    {
        return $this->hasMany(VaccinatedPatients::class, 'patient_id');
    }
}
