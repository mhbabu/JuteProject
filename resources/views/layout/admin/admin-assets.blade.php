<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    {!! Html::style('assets/admin/vendor/fontawesome-free/css/all.min.css') !!}
    {!! Html::style('assets/admin/css/sb-admin-2.min.css') !!}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">--}}

    @yield('admin-style')

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    @include('parts.admin.admin-sidebar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            @include('parts.admin.admin-header')

            <!-- Begin Page Content -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        @include('parts.admin.admin-footer')

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

    @include('parts.admin.logout_modal')
{!! Html::script('assets/admin/vendor/jquery/jquery.min.js') !!}
{!! Html::script('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}
{!! Html::script('assets/admin/vendor/jquery-easing/jquery.easing.min.js') !!}
{!! Html::script('assets/admin/js/sb-admin-2.min.js') !!}
{!! Html::script('assets/admin/vendor/chart.js/Chart.min.js') !!}
{!! Html::script('assets/admin/js/demo/chart-area-demo.js') !!}
{!! Html::script('assets/admin/js/demo/chart-pie-demo.js') !!}

@yield('admin-script')

</body>

</html>
