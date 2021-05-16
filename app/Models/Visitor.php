<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Visitor extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $table = 'visitors';

    const PATH = 'visitors';
    const PURPOSE = [
        1 => 'Visit',
        2 => 'Enquiry',
        3 => 'Seminar',
    ];

    const FILTER_PURPOSE = [
        0 => 'All',
        1 => 'Visit',
        2 => 'Enquiry',
        3 => 'Seminar',
    ];

    protected $fillable = [
        'purpose',
        'name',
        'phone',
        'id_card',
        'no_of_person',
        'date',
        'in_time',
        'out_time',
        'note',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'purpose' => 'required',
        'name'    => 'required',
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
