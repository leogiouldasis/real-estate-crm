<?php

namespace App\Http\Controllers\Async;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Cache;
use GuzzleHttp\Client as GuzzleClient;
use Carbon\Carbon;
use App\Models\Client;
use Yajra\DataTables\DataTables;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   

    public function getColumnData(Request $request)
    {
        $clients = Client::orderBy('xe_date', 'desc');

        if ($request->filled('name')) {
            $clients->where('name', $request->name);
        }

        if ($request->filled('surname')) {
            $clients->where('surname', $request->surname);
        }

        if ($request->filled('email')) {
            $clients->where('email', $request->email);
        }

        if ($request->filled('phone')) {
            $clients->where('phone', $request->phone);
        }

        if ($request->filled('interest_type')) {
            $clients->where('interest_type', $request->interest_type);
        }

        return Datatables::of($clients)
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
