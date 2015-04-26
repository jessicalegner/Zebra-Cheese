@extends('layouts.default')

@section('ticket.class')
active
@stop

@section('content')

<!-- Modal
<div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="customerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="customerModalLabel">Search for Existing Customer</h4>
            </div>
            <div class="modal-body">
                <div class="input-group form-group" id="customers">
                    {{  Form::open(array('class' => 'form-horizontal')) }}
                    {{ Form::label('customers', 'Customers') }}
                    {{ Form::text('customers[]', null, array(
                    'class' => 'typeahead',
                    'data-provider' => 'typeahead',
                    'data-items' => '10',
                    'id' => 'customers')
                    ) }}
                    {{ Form::close() }}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
 -->
{{  Form::open(array('route' => 'ticket.store', 'class' => 'form')) }}
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Customer Information</h3>
        </div>
        <div class="panel-body">
            <!--<button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#customerModal">
                <i class="fa fa-search"></i> Search for Existing Customer
            </button>-->
            <div class="row">
                <div class="form-group col-sm-6">
                    {{ Form::label('first_name', 'First Name') }}
                    {{ Form::text('first_name', isset($customer) ? $customer['first_name'] : '', array('class' => 'form-control', 'id' => 'first_name', 'placeholder' => 'First Name')) }}
                </div>
                <div class="form-group col-sm-6">
                    {{ Form::label('last_name', 'Last Name') }}
                    {{ Form::text('last_name', isset($customer) ? $customer['last_name'] : '', array('class' => 'form-control', 'id' => 'last_name', 'placeholder' => 'Last Name')) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12">
                    {{ Form::label('address', 'Address') }}
                    {{ Form::text('address', isset($customer) ? $customer['address'] : '', array('class' => 'form-control', 'id' => 'address', 'placeholder' => 'Address')) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    {{ Form::label('city', 'City') }}
                    {{ Form::text('city', isset($customer) ? $customer['city'] : '', array('class' => 'form-control', 'id' => 'city', 'placeholder' => 'City')) }}
                </div>

                <div class="form-group col-sm-4">
                    {{ Form::label('state', 'State') }}
                    {{ Form::text('state', isset($customer) ? $customer['state'] : '', array('class' => 'form-control', 'id' => 'state', 'placeholder' => 'State')) }}
                </div>
                <div class="form-group col-sm-4">
                    {{ Form::label('zip', 'Zip') }}
                    {{ Form::text('zip', isset($customer) ? $customer['zip'] : '', array('class' => 'form-control', 'id' => 'zip', 'placeholder' => 'Zip')) }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    {{ Form::label('conact_phone', 'Conact Phone') }}
                    {{ Form::text('conact_phone', isset($customer) ? $customer['conact_phone'] : '', array('class' => 'form-control', 'id' => 'conact_phone', 'placeholder' => 'Conact Phone')) }}
                </div>

                <div class="form-group col-sm-6">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::text('email', isset($customer) ? $customer['email'] : '', array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email')) }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Device Information</h3>
            </div>
            <div class="panel-body">

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {{ Form::submit('Submit', array('class' => 'btn btn-info btn-block submit_button')) }}
    </div>
</div>
{{ Form::close() }}
<!--http://stackoverflow.com/questions/20886845/typeahead-remote-with-laravel-4-individual-pieces-working-i-think-but-not-wor-->
<script>
    $('.typeahead').typeahead([
    {
        name: 'customers',
        remote: '/ticket/create/%QUERY'
    }
    ]);
</script>
@stop