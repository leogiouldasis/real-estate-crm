<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use View;
use App\Models\XeAds;
use Cache;

class XeAdsController extends Controller
{
    public function buildFilters()
    {
        $filters = [
            'areas' => [],
            'nomoi' => [],
            'states' => [],
        ];


        $filters['areas'] = XeAds::raw()->distinct('area');
        $filters['nomoi'] = XeAds::raw()->distinct('nomos');
        $filters['states'] = XeAds::raw()->distinct('state');

        View::share('filters', $filters);
        Cache::forever('filtered_areas', $filters['areas']);
    }

    public function index(Request $request, $category = null, $sub_category = null)
    {
        $this->buildFilters();
        return view('xe-ads.index', [
            'title' => 'Xe Ads List',
            'request' => $request->all(),
        ]);
    }

    public function edited(Request $request, $category = null, $sub_category = null)
    {
        $this->buildFilters();
        return view('xe-ads.edited', [
            'title' => 'Xe Ads Edited List',
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
        $xeAd = XeAds::where('id', (int) $id)->first();
        // dd($xeAd);

        return view('xe-ads.edit', [
            'title' => 'Xe Ad '.$xeAd->id,
            'xeAd' => $xeAd
        ]);
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
        $data = $request->all();
        $data['last_action_by'] = \Auth::user()->id;
        $data['last_action_by_date'] = Carbon::now();
        $data['edited'] = true;
        $xeAd = XeAds::where('id', (int) $id)->first();
        $xeAd->update($data);
        return redirect()->route('xe-ads.edit', ['id' => $xeAd->id])->with('status', 'Saved!');
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
