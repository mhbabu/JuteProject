@extends('layout.admin.admin-layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary"><i class="fa fa-edit"> </i> Edit Product</h5>
        </div>
        {{ Form::open(['url'=>'product/store/'.\App\Libraries\Encryption::encodeId($singleProduct->id),'method'=>'post']) }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                        {!! Form::label('name','Name : ') !!}
                        {!! Form::text('name',$singleProduct->name,['class'=>'form-control','placeholder'=>'Sub category name']) !!}
                        {!! $errors->first('name','<span class="help-block" style="color: red;">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('category_id')?'has-error':'' }}">
                        {!! Form::label('category_id','Category : ') !!}
                        {!! Form::select('category_id',$allPublishedCategories,$singleProduct->category_id,['class'=>'form-control','placeholder'=>'Select one']) !!}
                        {!! $errors->first('category_id','<span class="help-block" style="color: red;">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('sub_category_id')?'has-error':'' }}">
                        {!! Form::label('sub_category_id','SubCategory : ') !!}
                        {!! Form::select('sub_category_id',$allPublishedSubCategories,$singleProduct->sub_category_id,['class'=>'form-control','placeholder'=>'Select one']) !!}
                        {!! $errors->first('sub_category_id','<span class="help-block" style="color: red;">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('vendor_id')?'has-error':'' }}">
                        {!! Form::label('vendor_id','Vendor : ') !!}
                        {!! Form::select('vendor_id',$allPublishedVendors,$singleProduct->vendor_id,['class'=>'form-control','placeholder'=>'Select one']) !!}
                        {!! $errors->first('vendor_id','<span class="help-block" style="color: red;">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('status')?'has-error':'' }}">
                        {!! Form::label('status','Status : ') !!}
                        {!! Form::select('status',[1=>'Active', 0=>'Inactive'],$singleProduct->status,['class'=>'form-control','placeholder'=>'Select one']) !!}
                        {!! $errors->first('status','<span class="help-block" style="color: red;">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('price')?'has-error':'' }}">
                        {!! Form::label('price','Price : ') !!}
                        {!! Form::text('price',$singleProduct->price,['class'=>'form-control','placeholder'=>'Price']) !!}
                        {!! $errors->first('price','<span class="help-block" style="color: red;">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                        {!! Form::label('code','Code : ') !!}
                        {!! Form::text('code',$singleProduct->code,['class'=>'form-control','placeholder'=>'Code']) !!}
                        {!! $errors->first('code','<span class="help-block" style="color: red;">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('origin')?'has-error':'' }}">
                        {!! Form::label('origin','Origin : ') !!}
                        {!! Form::text('origin',$singleProduct->origin,['class'=>'form-control','placeholder'=>'Origin']) !!}
                        {!! $errors->first('origin','<span class="help-block" style="color: red;">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('description')?'has-error':'' }}">
                        {!! Form::label('description','Description : ') !!}
                        {!! Form::textarea('description',$singleProduct->description,['class'=>'form-control','placeholder'=>'Description','rows'=>'3']) !!}
                        {!! $errors->first('description','<span class="help-block" style="color: red;">:message</span>') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <a class="btn btn-danger float-left" href="{{ url('product/list') }}">Close</a>
                        {!! Form::submit('Update Product',['class'=>'btn btn-info float-right']) !!}
                    </div>
                    <div class="clear-fix"></div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection