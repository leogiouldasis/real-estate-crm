<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use View;
use App\Models\XeAds;

class XeAdsController extends Controller
{
    public function buildFilters()
    {
        // $filters = [
        //     'areas' => [],
        //     'cities' => [],
        //     'promo_areas' => [],
        //     'states' => [],
        // ];

        // $selected = ['promoted_area_name', 'city', 'area'];
        // $leads = Shop::where('is_archived', false)
        //     ->where('is_ncr_eligible', true)
        //     ->get($selected);

        // foreach ($leads as $key => $value) {
        //     if (isset($value->area) && !empty($value->area)) {
        //         array_push($filters['areas'], $value->area);
        //     }
        //     if (isset($value->city) && !empty($value->city)) {
        //         array_push($filters['cities'], $value->city);
        //     }
        //     if (isset($value->promoted_area_name) && !empty($value->promoted_area_name)) {
        //         array_push($filters['promo_areas'], $value->promoted_area_name);
        //     }
        // }

        // $filters['areas'] = array_unique($filters['areas']);
        // $filters['cities'] = array_unique($filters['cities']);
        // $filters['promo_areas'] = array_unique($filters['promo_areas']);

        // View::share('filters', $filters);
        // Cache::forever('filtered_areas', $filters['areas']);
    }

    public function index(Request $request, $category = null, $sub_category = null)
    {
        $this->buildFilters();
        return view('xe-ads', [
            'title' => 'Xe Ads List',
            'request' => $request->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
