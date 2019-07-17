@extends('layout.admin.admin-layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary"><i class="fa fa-plus"> </i> Add Vendor</h5>
        </div>
        {{ Form::open(['url'=>'vendor/store','method'=>'post']) }}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                            {!! Form::label('name','Vendor name : ') !!}
                            {!! Form::text('name','',['class'=>'form-control','placeholder'=>'Vendor name']) !!}
                            {!! $errors->first('name','<span class="help-block" style="color: red;">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('status')?'has-error':'' }}">
                            {!! Form::label('status','Vendor Status : ') !!}
                            {!! Form::select('status',[1=>'Active', 0=>'Inactive'],'',['class'=>'form-control','placeholder'=>'Select one']) !!}
                            {!! $errors->first('status','<span class="help-block" style="color: red;">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('address')?'has-error':'' }}">
                            {!! Form::label('address','Address : ') !!}
                            {!! Form::textarea('address','',['class'=>'form-control','placeholder'=>'Address','rows'=>'3']) !!}
                            {!! $errors->first('address','<span class="help-block" style="color: red;">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('email')?'has-error':'' }}">
                            {!! Form::label('email','Email Address : ') !!}
                            {!! Form::email('email','',['class'=>'form-control','placeholder'=>'Email address']) !!}
                            {!! $errors->first('email','<span class="help-block" style="color: red;">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('phone')?'has-error':'' }}">
                            {!! Form::label('phone','Phone Number : ') !!}
                            {!! Form::text('phone','',['class'=>'form-control','placeholder'=>'Phone number']) !!}
                            {!! $errors->first('phone','<span class="help-block" style="color: red;">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('website')?'has-error':'' }}">
                            {!! Form::label('website','Website : ') !!}
                            {!! Form::text('website','',['class'=>'form-control','placeholder'=>'Website url']) !!}
                            {!! $errors->first('website','<span class="help-block" style="color: red;">:message</span>') !!}
                        </div>

                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::submit('Save Vendor',['class'=>'btn btn-info']) !!}
                        </div>
                    </div>
                </div>
            </div>
        {{ Form::close() }}
    </div>
@endsection