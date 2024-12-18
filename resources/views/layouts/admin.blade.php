
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Securibet - @yield('page-title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/SB.png') }}">

        <link href="{{ asset('admin/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/plugins/timepicker/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/jquery-ui.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body class="">

        <!-- Left Sidenav -->
        @include('admin.components.sidebar')
        <!-- end left-sidenav-->

        <!-- Top Bar Start -->
        @include('admin.components.header')
        <!-- Top Bar End -->

        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content-tab">
                <div class="container-fluid">
                    @yield('content')
                </div><!-- container -->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->



        <form action="{{ route('admin.logout') }}" method="POST" id="logout-form">@csrf</form>
        <!-- jQuery  -->
        <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/metismenu.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/waves.js') }}"></script>
        <script src="{{ asset('admin/assets/js/feather.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/moment/moment.js') }}"></script>
        <script src="{{ asset('admin/plugins/select2/select2.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/timepicker/bootstrap-material-datetimepicker.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>

        <script src="{{ asset('admin/assets/js/app.js') }}"></script>
        @if (Session::has('success'))
            <script>
                Toast.fire({
                    icon: 'success',
                    title: '{{ session("success") }}'
                })
            </script>
        @endif

        @if (Session::has('error'))
            <script>
                Toast.fire({
                    icon: 'error',
                    title: '{{ session("error") }}'
                })
            </script>
        @endif

        @yield('js')
    </body>

</html>
