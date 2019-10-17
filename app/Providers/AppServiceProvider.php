<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Jenssegers\Mongodb\Eloquent\Builder;
use App\Models\XeAds;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (in_array(env('APP_ENV'), ['staging', 'production'])) {
            \URL::forceScheme('https');
        }

        $filters = [
            'areas' => [],
            'nomoi' => [],
            'states' => [],
            'types' => [],
        ];
        $filters['areas'] = XeAds::raw()->distinct('area');
        $filters['nomoi'] = XeAds::raw()->distinct('nomos');
        $filters['states'] = XeAds::raw()->distinct('state');
        $filters['types'] = XeAds::raw()->distinct('type');

        View::share('filters', $filters);
    }
}
