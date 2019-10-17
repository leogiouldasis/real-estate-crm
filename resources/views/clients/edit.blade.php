@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        {!! Form::open(['route' => ['clients.update', $client->id], 'method' => 'PUT', 'class' =>
            'form-horizontal form-label-left']) !!}
            @include('clients.form')
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