@extends('layouts.default')

@section('manage.devices.class')
  active
@stop

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">{{ $device->brand->name . ' ' . $device->model->name }}</div>
            <div class="panel-body">
                {{ Form::open(array('route' => array('device.update'), 'class' => 'form-horizontal')) }}
                {{ Form::hidden('id', $device ? $device->id : '') }}
                <div class="form-group">
                    {{ Form::label('brand', 'Brand', array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ Form::select('brand', $brands,  isset($device) ? $device->brand->id : '', array('class' => 'form-control'))}}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('model', 'Model', array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ Form::select('model', $models,  isset($device) ? $device->model->id : '', array('class' => 'form-control'))}}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('type', 'Type', array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ Form::select('type', $types,  isset($device) ? $device->type->id : '', array('class' => 'form-control'))}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-4 col-md-4">
                        {{ Form::submit('Submit', array('class' => 'btn btn-info btn-block')) }}
                    </div>
                </div>
                {{ Form::close() }}        
            </div>
        </div>
    </div>
</div>
@stop