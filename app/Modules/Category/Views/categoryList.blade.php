@extends('layout.admin.admin-layout')
@section('admin-style')
    {!! Html::style('assets/admin/datatable/css/dataTables.bootstrap4.css') !!}
@endsection
@section('content')
    @include('parts.admin.message')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary float-left"><i class="fa fa-list"></i> Category List</h5>
            <a class="btn btn-primary float-right" href="{{ url('category/create') }}"><i class="fa fa-plus"></i> Create category</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="categoryList" width="100%" style="width: 100%;">
                                <thead>
                                <tr role="row">
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                </tfoot>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('admin-script')
    @include('parts.admin.script')
    <script type="text/javascript">
        $(document).ready(function(){
            $(function(){
                var t = $('#categoryList').DataTable({
                    columnDefs:[{
                        serachable:false,
                        orderable:false,
                        targets:0
                    }],

                    processing:true,
                    serverSide:true,
                    iDisplayLength:15,
                    ajax:{
                        url:'{{ url('/category/get-list') }}',
                        method:'POST',
                        headers:{
                            'X-CSRF-TOKEN':'{{ csrf_token() }}'
                        }
                    },
                    columns:[
                        {name:'serial',data:'serial'},
                        {name:'category_name',data:'category_name'},
                        {name:'status',data:'status'},
                        {name:'action',data:'action'}
                    ],
                    "aaSorting":[]
                });

                t.on('order.dt search.dt', function () {
                    t.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }).draw();

            })
        });
    </script>
@endsection