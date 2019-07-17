@extends('layout.admin.admin-layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary"><i class="fa fa-plus"> </i> Add Sub Category</h5>
        </div>
        {{ Form::open(['url'=>'sub-category/store','method'=>'post']) }}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6">
                        <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                            {!! Form::label('name','Name : ') !!}
                            {!! Form::text('name','',['class'=>'form-control','placeholder'=>'Sub category name']) !!}
                            {!! $errors->first('name','<span class="help-block" style="color: red;">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('category_id')?'has-error':'' }}">
                            {!! Form::label('category_id','Select Category : ') !!}
                            {!! Form::select('category_id',$allPublishedCategories,'',['class'=>'form-control','placeholder'=>'Select one']) !!}
                            {!! $errors->first('category_id','<span class="help-block" style="color: red;">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('status')?'has-error':'' }}">
                            {!! Form::label('status','Status : ') !!}
                            {!! Form::select('status',[1=>'Active', 0=>'Inactive'],'',['class'=>'form-control','placeholder'=>'Select one']) !!}
                            {!! $errors->first('status','<span class="help-block" style="color: red;">:message</span>') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::submit('Save Sub-category',['class'=>'btn btn-info float-left']) !!}
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                </div>
            </div>
        {{ Form::close() }}
    </div>
@endsection