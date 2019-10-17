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
                    {!! Form::open(['url' => '/clients', 'method' => 'get', 'class' => '', 'id' => '']) !!}
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x-panel">
                                <div class="x_title">
                                    <h2><small>Filters</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        {{-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li> --}}
                                    </ul>
                                    <div class="nav navbar-right panel_toolbox text-right">
                                        <a href="/clients/create" type="button" class="btn btn-round btn-info"><i class="fa fa-plus"></i></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="row form-group">
                                        {{-- <div class="col-sm-4 ">
                                            <label for="id" class="col-sm-4 control-label">ID</label>
                                            <div class="col-sm-8">
                                                <input type="number" id="id" name="id" class="form-control" value="{{ $request['id'] ?? ''}}"> 
                                            </div>
                                        </div> --}}
                                        <div class="col-sm-4 ">
                                            <label for="name" class="col-sm-4 control-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="name" name="name" class="form-control" value="{{ $request['name'] ?? ''}}"> 
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <label for="surname" class="col-sm-4 control-label">Surname</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="surname" name="surname" class="form-control" value="{{ $request['surname'] ?? ''}}"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-4 ">
                                            <label for="email" class="col-sm-4 control-label">Email</label>
                                            <div class="col-sm-8">
                                            <input type="text" id="email" name="email" class="form-control" value="{{ $request['email'] ?? ''}}"> 
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <label for="phone" class="col-sm-4 control-label">Phone</label>
                                            <div class="col-sm-8">
                                                <input type="number" id="phone" name="phone" class="form-control" value="{{ $request['phone'] ?? ''}}"> 
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="areas" class="col-sm-4 control-label">Interest Type</label>
                                            <div class="col-sm-8">
                                                <select class="" name="interest_type" data-placeholder="Choose interest..." id="interest_type"
                                                    multiple="multiple" style="width: 100%;">
                                                    <option value="" disabled="">ALL</option>
                                                    @foreach(config('options.interest_type') as $obj)
                                                    <option value="{{$obj}}"
                                                        {{ isset($request['interest_type']) && $request['interest_type'] === $obj ? 'selected' : '' }}>
                                                        {{$obj}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
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
                                                <th>Name</th>
                                                <th>Surname</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Interest Type</th>
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
        
        $("#interest_type").select2({
        });
    
     
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
            "url": '/async/clients/getdata',
            "data": function ( d ) {
                // d.id = "{{ $request['id'] ?? '' }}";
                d.name = "{{ $request['name'] ?? '' }}";
                d.surname = "{{ $request['surname'] ?? '' }}";
                d.email = "{{ $request['email'] ?? '' }}";
                d.phone = "{{ $request['phone'] ?? '' }}";
                d.interest_type = "{{ $request['interest_type'] ?? '' }}";
            }
        },
        order: [[ 0, 'desc' ]],
        searchHighlight: true,
        responsive: true,
        columns: [
            {data: 'name', name: 'client.area', sortable: true},
            {data: 'surname', name: 'client.nomos', sortable: true},
            {data: 'email', name: 'client.email', sortable: true},
            {data: 'phone', name: 'client.phone', sortable: true},
            {data: 'interest_type', name: 'client.interest_type', sortable: true},
          ]
      });

      $('#index tbody').on('click', 'tr td:not(:last-child)', function () {
        var data = table.row( this ).data();
        window.location.href = '/clients/'+ data.id + '/edit';
      });

    });
</script>
@endpush