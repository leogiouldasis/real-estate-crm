<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\XeAds;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       
        $newCrawlerAds = XeAds::where('created_at', '>=', Carbon::today())->count();
        $newCrawlerAdsPrivate = XeAds::where('created_at', '>=', Carbon::today())->where('is_professional', 'no')->count();
        $newCrawlerAdsPrivateNotia = XeAds::where('created_at', '>=', Carbon::today())->where('is_professional', 'no')->where('tomeas', 'Κεντρικά & Νότια Προάστια')->count();
        $updatedXeAds = XeAds::where('xe_date', '>=', Carbon::today())->count();

        return view('home', [
            'updated_xe_ads' => $updatedXeAds,
            'new_crawler_ads' => $newCrawlerAds,
            'new_crawler_ads_private' => $newCrawlerAdsPrivate,
            'new_crawler_ads_private_notia' => $newCrawlerAdsPrivateNotia,
            'title' => 'Todays Stats'
        ]);
    }
}
