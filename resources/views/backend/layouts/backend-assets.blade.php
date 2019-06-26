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

    {!! style('assets/backend/vendor/fontawesome-free/css/all.min.css') !!}
    {!! style('assets/backend/css/sb-admin-2.min.css') !!}
        @yield('backend-style')

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('backend.includes.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('backend.includes.header')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('backend.includes.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
@include('backend.includes.logoutModal')

<!-- Bootstrap core JavaScript-->
{!! script('assets/backend/vendor/jquery/jquery.min.js') !!}
{!! script('assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}
{!! script('assets/backend/vendor/jquery-easing/jquery.easing.min.js') !!}
{!! script('assets/backend/js/sb-admin-2.min.js') !!}
{!! script('assets/backend/vendor/chart.js/Chart.min.js') !!}
{!! script('assets/backend/js/demo/chart-area-demo.js') !!}
{!! script('assets/backend/js/demo/chart-pie-demo.js') !!}
    @yield('backend-script')

</body>

</html>
