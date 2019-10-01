<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Carbon\Carbon;

class XeAds extends Eloquent
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    

    /**
     * The collection associated with the model.
     *
     * @var string
     */
    protected $collection = 'xe_ads';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    protected $dates = [
        'xe_date',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'area_full',
        'state',
        'nomos',
        'tomeas',
        'municipality',
        'area',
        'href',
        'price',
        'tm',
        'cost_tm',
        'is_professional',
        'professional_link',
        'description',
        'xe_date'
    ];

    protected $primaryKey = '_id';

}
