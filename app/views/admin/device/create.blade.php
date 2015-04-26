@extends('layouts.default')

@section('manage.devices.class')
  active
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Create New Device</div>
            <div class="panel-body">
                {{ Form::open(array('route' => array('device.store', 'method' => 'post'), 'class' => 'form-horizontal')) }}
                <div class="form-group">
                    {{ Form::label('model', 'Model', array('class' => 'col-sm-2 control-label')) }}
                    <div class="col-sm-4">
                        {{ Form::text('model', '', array('class' => 'form-control', 'placeholder' => 'Enter New Model'))}}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('brand', 'Brand', array('class' => 'col-sm-2 control-label')) }}
                    <div class="col-sm-4">
                        {{ Form::select('brand', array('' => 'Please Select') + $brands, '', array('class' => 'form-control'))}}
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="add-field btn btn-block btn-success" id="addBrand">Add New Brand</button>
                    </div>
                    <div class="col-sm-4">
                        {{ Form::text('new_brand', '', array('class' => 'form-control', 'placeholder' => 'Enter New Brand', 'id' => 'newBrand'))}}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('type', 'Type', array('class' => 'col-sm-2 control-label')) }}
                    <div class="col-sm-4">
                        {{ Form::select('type', array('' => 'Please Select') + $types, '', array('class' => 'form-control'))}}
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="add-field btn btn-block btn-success" id="addType">Add New Type</button>
                    </div>
                    <div class="col-sm-4">
                        {{ Form::text('new_type', '', array('class' => 'form-control', 'placeholder' => 'Enter New Type', 'id' => 'newType'))}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-2">
                        {{ Form::submit('Submit', array('class' => 'btn btn-info btn-block')) }}
                    </div>
                    <div class="col-md-2">
                        <a href="{{ URL::action('manage.devices') }}" class="btn btn-warning btn-block">Cancel</a>
                    </div>
                </div>
                {{ Form::close() }}        
            </div>
        </div>
    </div>
</div>
@stop

@section('javascript')
$(document).ready(function(){
    $('#newBrand').hide();
    $('#addBrand').click(function() {
      $('#newBrand').show();
    });

    $('#newType').hide();
    $('#addType').click(function() {
      $('#newType').show();
    });
});
@stop