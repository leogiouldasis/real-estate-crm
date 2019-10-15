<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Carbon\Carbon;


class Client extends Eloquent
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
    protected $collection = 'clients';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    protected $dates = [
    ];

    protected $dateFormat = 'd-m-Y H:i';

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'landphone',
        'price_min',
        'price_max',
        'tm_min',
        'tm_max',
        'interested_areas',
        'interest_type',
    ];
}
