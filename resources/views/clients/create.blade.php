@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        {!! Form::open(['route' => ['xe-ads.store'], 'method' => 'POST', 'class' =>
            'form-horizontal form-label-left']) !!}
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Client<small>Information</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <span class="section">Personal Info</span>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" name="name" type="text"
                                value={{ $client->name ?? ''}}>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="surname">Surname </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="surname" class="form-control col-md-7 col-xs-12" name="surname" type="text"
                                value={{ $client->surname ?? ''}}>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="email" class="form-control col-md-7 col-xs-12" name="email" type="email"
                                value={{ $client->email ?? ''}}>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Phone </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="phone" class="form-control col-md-7 col-xs-12" name="phone" type="text"
                                value={{ $client->phone ?? ''}}>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="landphone">Landphone </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="landphone" class="form-control col-md-7 col-xs-12" name="landphone" type="text"
                                value={{ $client->landphone ?? ''}}>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Ad<small>Information</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <span class="section">Interested Info</span>

                    <form class="form-horizontal form-label-left" novalidate>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price Min / Max </label>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <input id="price_min" class="form-control col-md-7 col-xs-12" name="price_min" type="text"
                                    value={{ $client->price_min ?? ''}}>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <input id="price_max" class="form-control col-md-7 col-xs-12" name="price_max" type="text"
                                    value={{ $client->price_max ?? ''}}>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">TM Min / Max </label>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <input id="tm_min" class="form-control col-md-7 col-xs-12" name="tm_min" type="text"
                                    value={{ $client->tm_min ?? ''}}>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <input id="tm_max" class="form-control col-md-7 col-xs-12" name="tm_max" type="text"
                                    value={{ $client->tm_max ?? ''}}>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Interested Areas </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="" name="interested_areas[]" data-placeholder="Choose areas..." id="interested_areas"
                                    multiple="multiple" style="width: 100%;">
                                    <option value="" disabled="">ALL</option>
                                    @foreach($filters['areas'] as $obj)
                                    <option value="{{$obj}}"
                                        {{ isset($request['interested_areas']) && in_array($obj, $request['interested_areas']) ? 'selected':'' }}>
                                        {{$obj}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Interested Areas </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="" name="interest_type" data-placeholder="Choose interest..." id="interest_type"
                                    multiple="multiple" style="width: 100%;">
                                    <option value="" disabled="">ALL</option>
                                    @foreach(config('options.interest_type') as $obj)
                                    <option value="{{$obj}}"
                                        {{ isset($request['interest_type']) && $request['interest_type'] === $pbj ? 'selected' : '' }}>
                                        {{$obj}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Cancel</button>
                                <button id="send" type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>

@stop

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $("#interested_areas").select2({
        });
        $("#interest_type").select2({
        });
    });
</script>
@endpush