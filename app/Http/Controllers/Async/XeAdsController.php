<?php

namespace App\Http\Controllers\Async;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Cache;
use GuzzleHttp\Client as GuzzleClient;
use Carbon\Carbon;
use App\Models\XeAds;
use Yajra\DataTables\DataTables;

class XeAdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   

    public function getColumnData(Request $request)
    {
        $ads = XeAds::orderBy('xe_date', 'desc');

        return Datatables::of($ads)
            // ->addColumn('last_action_date', function ($lead) {
            //     return $lead->last_action_date;
            // })
            // ->editColumn('am_appointment_date', function ($lead) {
            //     return $lead->am_appointment_date != null ? Carbon::parse($lead->am_appointment_date)->format('d-m-Y') : '-';
            // })
            // ->editColumn('gmv_group', function ($lead) {
            //     return $lead->{config('brand_config.brand')}['gmv_group'];
            // })
            ->make(true);
    }
}
