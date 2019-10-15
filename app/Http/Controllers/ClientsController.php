<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use View;
use App\Models\Client;
use Cache;

class ClientsController extends Controller
{

    public function index(Request $request, $category = null, $sub_category = null)
    {
        return view('clients.index', [
            'title' => 'Clients List',
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
        return view('clients.create', [
            'title' => 'Client Create'
        ]);
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
        $client = Client::where('id', (int) $id)->first();
        return view('clients.edit', [
            'title' => 'Client '.$client->id,
            'xeAd' => $client
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
        // $data = $request->all();
        // $data['last_action_by'] = \Auth::user()->id;
        // $data['last_action_by_date'] = Carbon::now();
        // $data['edited'] = true;
        // $xeAd = XeAds::where('id', (int) $id)->first();
        // $xeAd->addComment($data['comment']);
        // $xeAd->update($data);
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
