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
    protected $dateFormat = 'd-m-Y H:i';

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
        'xe_date',

        'notes',
        'last_action_by',
    ];

    protected $primaryKey = '_id';


    // Relations
    public function last_action_user()
    {
        return $this->hasOne('App\User', '_id', 'last_action_by');
    }


}
