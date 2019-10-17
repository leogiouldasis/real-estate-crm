@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header ch-alt m-b-20">
                    <h4>{{ $title }}</h4>
                </div>
                <div class="card-body card-padding">

                    <div class="row tile_count">
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-clock-o"></i> New Ads</span>
                            <div class="count">{{$new_crawler_ads ?? 0}}</div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last
                                Week</span>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> New Ads Private</span>
                            <div class="count green">{{$new_crawler_ads_private ?? 0}}</div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last
                                Week</span>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> New Private Notia Proasteia</span>
                                <div class="count">{{ $new_crawler_ads_private_notia ?? 0}}</div>
                                <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                            </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> Today Updated XE Ads</span>
                            <div class="count">{{ $updated_xe_ads ?? 0}}</div>
                            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last
                                Week</span>
                        </div>
                        {{-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> Demo Number</span>
                            <div class="count">2,315</div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last
                                Week</span>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> Demo Number</span>
                            <div class="count">7,325</div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last
                                Week</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop