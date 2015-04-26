@extends('layouts.default')

@section('manage.devices.class')
  active
@stop

@section('content')
@if(Session::get('message'))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-12">
        <a href="{{ URL::route('device.create') }}" class="pull-right"><button type="button" class="btn btn-success btn-lg"><i class="fa fa-plus"></i> Create New Device</button></a>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="well well-sm">
            <table id="devicesTable" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Device ID</th>
                        <th>Model</th>
                        <th>Brand</th>
                        <th>Type</th>
                        <!-- <th></th> -->
                        <th></th>
                    </tr>
                </thead>
                @foreach($devices as $device)
                <tr>
                    <td>{{ $device->id }}</td>
                    <td>{{ $device->model->name }}</td>
                    <td>{{ $device->model->brand->name }}</td>
                    <td>{{ $device->type->name }}</td>
                    <!-- <td><a href="{{ URL::route('device.edit', array('id' => $device->id)) }}"><button type="button" class="btn btn-primary btn-mini">Edit</button></a></td> -->
                    <td>
                        {{ Form::open(array('route' => array('device.delete', 'id' => $device->id), 'method' => 'delete')) }}
                            <button type="submit" class="btn btn-danger btn-mini" onclick="return confirm('You sure, man?')">Delete</button>
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@stop

@section('javascript')
$(document).ready(function(){
    $('#devicesTable').DataTable({
        "columnDefs": [
            {
                "targets": [ 4 ],
                "sorting": false
            }
        ]
    });
});
@stop