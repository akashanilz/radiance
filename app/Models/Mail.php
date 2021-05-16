<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mail extends Model
{
    public $table = 'mails';

    public $fillable = ['to', 'subject', 'message', 'attachments', 'user_id',];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'          => 'integer',
        'to'          => 'string',
        'subject'     => 'string',
        'message'     => 'text',
        'attachments' => 'string',
        'user_id'     => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'to'          => 'required|email',
        'subject'     => 'required',
        'message'     => 'required',
        'attachments' => 'nullable|mimes:jpeg,gif,png,,jpg,mp3',
    ];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
