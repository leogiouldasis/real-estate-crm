@extends('layouts.app')
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header ch-alt m-b-20">
                    <h2>{{ $title }}</h2>
                </div>
                <div class="card-body card-padding">
                    {!! Form::open(['url' => '/xe-ads', 'method' => 'get', 'class' =>
                    'form-horizontal',
                    'id' => 'search-form']) !!}

                    {!! Form::close() !!}
                </div>
                <div class="card-body card-padding">
                    <div class="card-body table-responsive">
                        <table class="table table-condensed table-striped" id='index'>
                            <thead>
                                <tr>
                                    <th>Xe ID</th>
                                    <th>Area Full</th>
                                    <th>Price</th>
                                    <th>TM</th>
                                    <th>Is Professional</th>
                                    <th>XE Date</th>
                                    <th>Last updated</th>
                                    <th>Created</th>
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
@stop

<script src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {

     
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
            "url": '/async/xe-ads/getdata',
            "data": function ( d ) {
                d.id_title = "test";
            }
        },
        order: [[ 0, 'desc' ]],
        searchHighlight: true,
        responsive: true,
        columns: [
            {data: 'id', name: 'ads.id',  sortable: true},
            {data: 'area_full', name: 'ads.area_full', sortable: true},
            {data: 'price', name: 'ads.price', orderable: true},
            {data: 'tm', name: 'ads.tm', orderable: true},
            {data: 'is_professional', name: 'ads.is_professional',  sortable: true},
            {data: 'xe_date', name: 'ads.xe_date',  sortable: true},
            {data: 'updated_at', name: 'ads.updated_at',  sortable: true},
            {data: 'created_at', name: 'ads.created_at',  sortable: true},
            {data: 'href', name: 'ads.href',  sortable: true},
          ]
      });
    });
</script>