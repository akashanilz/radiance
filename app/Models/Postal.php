<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

/**
 * Class Postal
 */
class Postal extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $table = 'postals';
    const PATH = 'postal';
    const POSTAL_RECEIVE = 1;
    const POSTAL_DISPATCH = 2;

    /**
     * @var string[]
     */
    public $fillable = [
        'from_title',
        'to_title',
        'reference_no',
        'date',
        'address',
        'type',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        "from_title" => "required_if:type,==,".self::POSTAL_RECEIVE,
        "to_title"   => "required_if:type,==,".self::POSTAL_DISPATCH,
    ];

    /**
     * @var array
     */
    protected $appends = ['document_url'];

    /**
     * @return mixed
     */
    public function getDocumentUrlAttribute()
    {
        /**
         * @var Media $media
         */
        $media = $this->media->first();
        if (! empty($media)) {
            return $media->getFullUrl();
        }

        return '';
    }
}
