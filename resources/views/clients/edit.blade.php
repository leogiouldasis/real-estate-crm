@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Client<small>Information</small></h2>
                    <div class="clearfix"></div>
                    <h5>Last Updated on XE {{$xeAd->xe_date}}</h5>
                </div>
                <div class="x_content">

                    <p>Visit the <code>xe.gr ad</code> in the <a class="btn btn-round btn-info"
                            href="{{$xeAd->href}}">Link</a>
                    </p>
                    <span class="section">Personal Info</span>

                    <form class="form-horizontal form-label-left" novalidate>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">ID </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text" value={{ $xeAd->id }}>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Area Full </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text"
                                    value={{ $xeAd->area_full }}>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">State </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text" value={{ $xeAd->state }}>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nomos </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text" value={{ $xeAd->nomos }}>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tomeas </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text" value={{ $xeAd->tomeas }}>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Municipality </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text"
                                    value={{ $xeAd->municipality }}>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Area </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text" value={{ $xeAd->area }}>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Type </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text" value={{ $xeAd->type }}>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text"
                                    value={{ number_format($xeAd->price, 0, ',', '.') }}€>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">TM - €/TM </label>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text" value={{ $xeAd->tm }}>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text"
                                    value={{ $xeAd->cost_tm }}€>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Is Professional </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text"
                                    value={{ $xeAd->is_professional }}>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Link</label>
                            <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top:7px;">
                                <a href="{{ $xeAd->professional_link }}">
                                    <code>{{ $xeAd->professional_link }}</code>
                                </a>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea id="textarea" disabled rows="10" cols="50"
                                    class="form-control col-md-7 col-xs-12">{{ $xeAd->description }}</textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Last time Crawled
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text"
                                    value={{ $xeAd->updated_at }}>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>RECRM <small>Information</small></h2>
                    <div class="clearfix"></div>
                    <h5>Last action by: {{ $xeAd->last_action_user ? $xeAd->last_action_user->name : ''}}</h5>
                </div>
                <div class="x_content">
                    {!! Form::open(['route' => ['xe-ads.update', $xeAd->id], 'method' => 'PUT', 'class' =>
                    'form-horizontal form-label-left']) !!}
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <input id="address" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                data-validate-words="2" name="address" type="text" value={{ $xeAd->address }}>
                        </div>
                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="name">Num</label>
                        <div class="col-md-2 col-sm-2 col-xs-6">
                            <input id="street_number" class="form-control col-md-7 col-xs-12"
                                data-validate-length-range="6" data-validate-words="2" name="street_number"
                                type="number" value={{ $xeAd->street_number }}>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Owner Info</label>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <input id="owner_name" class="form-control col-md-7 col-xs-12"
                                data-validate-length-range="6" data-validate-words="2" name="owner_name" type="text"
                                value={{ $xeAd->owner_name }}>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-6">
                            <input id="owner_surname" class="form-control col-md-7 col-xs-12"
                                data-validate-length-range="6" data-validate-words="2" name="owner_surname" type="text"
                                value={{ $xeAd->owner_surname }}>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Neighboorhood info
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="neighboorhood_info" required="required" name="neighboorhood_info" rows="3"
                                cols="30"
                                class="form-control col-md-7 col-xs-12">{{$xeAd->neighboorhood_info}}</textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Area Info</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="area_info" required="required" name="area_info" rows="3" cols="30"
                                class="form-control col-md-7 col-xs-12">{{$xeAd->area_info}}</textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Urban Planning Info
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="urban_planning_info" required="required" name="urban_planning_info" rows="3"
                                cols="30"
                                class="form-control col-md-7 col-xs-12">{{$xeAd->urban_planning_info}}</textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Add Comment
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="comment" required="required" name="comment" rows="2"
                                cols="30"
                                class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="x_panel">
                <div class="x_title">
                    <h2>Comments<small>Demo</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: block;">
                    <div class="">
                        <ul class="to_do">
                            @if($xeAd->comments)
                                @foreach($xeAd->comments as $comment)
                                <li>
                                    <p>
                                        <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox"
                                                class="flat" style="position: absolute; opacity: 0;"><ins
                                                class="iCheck-helper"
                                                style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>{{ $comment['date'] }} / {{ $comment['user_name'] }}  --->  {{ $comment['text'] }}
                                    </p>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
    
    });
</script>
@endpush