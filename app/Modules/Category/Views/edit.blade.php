@extends('layout.admin.admin-layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary"><i class="fa fa-edit"> </i> Edit Category</h5>
        </div>
        {{ Form::open(['url'=>'category/store/'.\App\Libraries\Encryption::encodeId($singleCategory->id),'method'=>'post']) }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                        {!! Form::label('name','Category Name : ') !!}
                        {!! Form::text('name',$singleCategory->name,['class'=>'form-control','placeholder'=>'Category Name']) !!}
                        {!! $errors->first('name','<span class="help-block" style="color: red;">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('status')?'has-error':'' }}">
                        {!! Form::label('status','Category Status : ') !!}
                        {!! Form::select('status',[1=>'Active', 0=>'Inactive'],$singleCategory->status,['class'=>'form-control','placeholder'=>'Select One']) !!}
                        {!! $errors->first('status','<span class="help-block" style="color: red;">:message</span>') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
           <div class="row">
               <div class="col-md-6">
                   <div class="form-group">
                       <a class="btn btn-danger float-left" href="{{ url('category/list') }}">Close</a>
                       {!! Form::submit('Update Category',['class'=>'btn btn-info float-right']) !!}
                   </div>
               </div>
           </div>
            <div class="clear-fix"></div>
        </div>

        {{ Form::close() }}
    </div>
@endsection