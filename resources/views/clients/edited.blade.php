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
                    {!! Form::open(['url' => '/xe-ads', 'method' => 'get', 'class' => '', 'id' => '']) !!}
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x-panel">
                                <div class="x_title">
                                    <h2><small>Filters</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <!-- Actions -->
                                    <div class="col-sm-4 form-group">
                                        <label for="areas" class="col-sm-4 control-label">Area</label>
                                        <div class="col-sm-8">
                                            <select class="" name="area[]" data-placeholder="Choose areas..." id="area"
                                                multiple="multiple" style="width: 100%;">
                                                <option value="" disabled="">ALL</option>
                                                @foreach($filters['areas'] as $obj)
                                                <option value="{{$obj}}"
                                                    {{ isset($request['area']) && in_array($obj, $request['area']) ? 'selected':'' }}>
                                                    {{$obj}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label for="areas" class="col-sm-4 control-label">Nomos</label>
                                        <div class="col-sm-8">
                                            <select class="" name="nomos[]" data-placeholder="Choose nomous..."
                                                id="nomos" multiple="multiple" style="width: 100%;">
                                                <option value="" disabled="">ALL</option>
                                                @foreach($filters['nomoi'] as $obj)
                                                <option value="{{$obj}}"
                                                    {{ isset($request['nomos']) && in_array($obj, $request['nomos']) ? 'selected':'' }}>
                                                    {{$obj}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label for="areas" class="col-sm-4 control-label">State</label>
                                        <div class="col-sm-8">
                                            <select class="" name="state[]" data-placeholder="Choose states..."
                                                id="state" multiple="multiple" style="width: 100%;">
                                                <option value="" disabled="">ALL</option>
                                                @foreach($filters['states'] as $obj)
                                                <option value="{{$obj}}"
                                                    {{ isset($request['nomos']) && in_array($obj, $request['nomos']) ? 'selected':'' }}>
                                                    {{$obj}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10"></div>
                                    <div class="col-sm-2 text-right form-group">
                                        <button id="filter" class="btn btn-success">Filter</button>
                                        {{-- <button id="reset" class="btn btn-xs bgm-orange">Reset</button> --}}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <div class="card-body card-padding">
                                <div class="card-body table-responsive">
                                    <table class="table table-condensed table-striped" id='index'>
                                        <thead>
                                            <tr>
                                                <th>Xe ID</th>
                                                <th>Area</th>
                                                <th>Nomos</th>
                                                <th>Type</th>
                                                <th>Price</th>
                                                <th>TM</th>
                                                <th>Profe.</th>
                                                <th>XE Date</th>
                                                <th>Last Edited</th>
                                                <th>XE Link</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
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
        
        $("#area").select2({
        });
        $("#nomos").select2({
        });
        $("#state").select2({
        });


        var areas = [];
        @if(isset($request['area']) && !empty($request['area']))
          @foreach($request['area'] as $area)
            areas.push('{{$area}}');
          @endforeach
        @endif
        var nomoi = [];
        @if(isset($request['nomos']) && !empty($request['nomos']))
          @foreach($request['nomos'] as $nomos)
            nomoi.push('{{$nomos}}');
          @endforeach
        @endif
        var states = [];
        @if(isset($request['state']) && !empty($request['state']))
          @foreach($request['state'] as $state)
            states.push('{{$state}}');
          @endforeach
        @endif
        

     
      var table = $('#index').DataTable({
        processing: true,
        serverSide: true,
        pageLength: 50,
        lengthMenu: [ [10, 25, 50, 100, 200, 500, -1], [10, 25, 50, 100, 200, 500, "All"] ],
        autoWidth: false,
        filter: false,
        dom: '<"top"i>rt<"bottom"flpB><"clear">',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            {
              extend: 'pdfHtml5',
                exportOptions: {
                    columns: ['0','1','2','3','4','5','6']
                }
            }
        ],
        ajax: {
            "url": '/async/xe-ads/edited/getdata',
            "data": function ( d ) {
                d.areas = areas;
                d.nomoi = nomoi;
                d.states = states;
            }
        },
        order: [[ 0, 'desc' ]],
        searchHighlight: true,
        responsive: true,
        columns: [
            {data: 'id', name: 'ads.id',  sortable: true},
            {data: 'area', name: 'ads.area', sortable: true},
            {data: 'nomos', name: 'ads.nomos', sortable: true},
            {data: 'type', name: 'ads.type', sortable: true},
            {data: 'price', name: 'ads.price', orderable: true},
            {data: 'tm', name: 'ads.tm', orderable: true},
            {data: 'is_professional', name: 'ads.is_professional',  sortable: true},
            {data: 'xe_date', name: 'ads.xe_date',  sortable: true},
            {data: 'last_action_by_date', name: 'ads.last_action_by_date',  sortable: true},
            {
                sortable: false,
                searchable: false,
                "render": function ( data, type, full, meta ) {
                    $item = `<a target="_blank" href='`+ full.href + `'>go to XE</a>`;
                    return $item;
                }
            },
          ]
      });

      $('#index tbody').on('click', 'tr td:not(:last-child)', function () {
        var data = table.row( this ).data();
        window.location.href = '/xe-ads/'+ data.id + '/edit';
      });

    });
            </script>
            @endpush