@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                <h2>Xe<small>Information</small></h2>
                    <div class="clearfix"></div>
                    <h5>Last Updated on XE {{$xeAd->xe_date}}</h5>
                </div>
                <div class="x_content">

                        <p>Visit the <code>xe.gr ad</code> in the <a class="btn btn-round btn-info" href="{{$xeAd->href}}">Link</a>
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
                                    data-validate-words="2" name="name" disabled type="text" value={{ number_format($xeAd->price, 0, ',', '.') }}€>
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
                                    data-validate-words="2" name="name" disabled type="text" value={{ $xeAd->cost_tm }}€>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Is Professional </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text" value={{ $xeAd->is_professional }}>
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Last time Crawled </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
                                    data-validate-words="2" name="name" disabled type="text" value={{ $xeAd->updated_at }}>
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
                    {!! Form::open(['route' => ['xe-ads.update', $xeAd->id], 'method' => 'PUT', 'class' => 'form-horizontal form-label-left']) !!}
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Notes <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea id="notes" required="required" name="notes" rows="10" cols="50"
                            class="form-control col-md-7 col-xs-12">{{$xeAd->notes}}</textarea>
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