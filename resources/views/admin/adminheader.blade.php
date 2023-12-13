<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Happy Club - Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">



</head>

<body class="hold-transition sidebar-mini layout-fixed">





    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ url('dist/img/load.jpg') }}" alt="load" height="60"
                width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="adhome" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('/showreview')}}" class="nav-link">Feedback</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('/contactus')}}" class="nav-link">Contact Us</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    {{-- <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="" role="button">
          <i class="fas fa-th-large"></i>
        </a> --}}
                    @if (session('adminname'))
                        <a href="{{ url('/logout') }}">
                            <button type="button" class="btn btn-block bg-gradient-primary btn-sm">Logout</button>
                        </a>
                    @endif
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a class="brand-link">
                <img src="{{url('images/logo.jpeg')}}" alt="" height="60" width="90">
                <span class="brand-text font-weight-light"><b>Happy Club</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="font-size: 120%">
                    <div class="image">
                        <img src="{{ url('images/user.jpg') }}" class="img-circle" alt="">
                    </div>
                    <div class="info">
                        <a class="d-block">{{ session()->get('adminname') }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="adhome" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Membership Type
                                    <i class="fas fa-angle-left right"></i>
                                    <!-- <span class="badge badge-info right">6</span>-->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="mstypeform" class="nav-link">
                                        <!--<i class="far fa-circle nav-icon"></i>-->
                                        <p>Add Membership Type</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="mstypemsts" class="nav-link">
                                        <!-- <i class="far fa-circle nav-icon"></i>-->
                                        <p>Show Membership Type</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Members
                                    <i class="fas fa-angle-left right"></i>
                                    <!-- <span class="badge badge-info right">6</span>-->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="msform" class="nav-link">
                                        <!--<i class="far fa-circle nav-icon"></i>-->
                                        <p>Add Members</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="msmsts" class="nav-link">
                                        <!-- <i class="far fa-circle nav-icon"></i>-->
                                        <p>Show Members</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Dependants
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="ddform" class="nav-link">
                                        <p> Add Dependants</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="ddmsts" class="nav-link">
                                        <p> Show Dependants</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Facility
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="facilityform" class="nav-link">
                                        <!--<i class="far fa-circle nav-icon"></i>-->
                                        <p>Add Facility</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="facilitymsts" class="nav-link">
                                        <!--<i class="far fa-circle nav-icon"></i>-->
                                        <p>Show Facility</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Events
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="eventform" class="nav-link">
                                        <!--<i class="far fa-circle nav-icon"></i>-->
                                        <p>Add Events</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="eventmsts" class="nav-link">
                                        <!--<i class="far fa-circle nav-icon"></i>-->
                                        <p>Show Events</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Room Charges
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="rcform" class="nav-link">
                                        <p> Add Room Charges</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="rcmsts" class="nav-link">
                                        <p> Show Room Charges</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Cancellation Rules
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="cruleform" class="nav-link">
                                        <!--<i class="far fa-circle nav-icon"></i>-->
                                        <p>Add Cancellation Rule</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="crulemsts" class="nav-link">
                                        <!--<i class="far fa-circle nav-icon"></i>-->
                                        <p>Show Cancellation Rule</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                         <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Room Booking Details
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="todaybookdisplay" class="nav-link"> 
                                        <i class="far fa-circle nav-icon"></i>
                                         <p>Show Today's Bookings</p>
                                    </a>
                                </li>
                               <li class="nav-item">
                                    <a href="roombookdisplay" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                        <p>Show All Bookings</p>
                                    </a>
                                </li>
                            </ul>
                        </li> 
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    FAQ
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="faq" class="nav-link">
                                        <p> Add FAQs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="faqmsts" class="nav-link">
                                        <p> Show FAQs</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Review
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <!-- <li class="nav-item">
                                    <a href="faq" class="nav-link">
                                        <p> Add FAQs</p>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="showreview" class="nav-link">
                                        <p> Show Review</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    BookEvent Detail
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <!-- <li class="nav-item">
                                    <a href="faq" class="nav-link">
                                        <p> Add FAQs</p>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <p> Show EventBooking</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <!--<div class="col-sm-6">
            <h1 class="m-0">Facility</h1>
          </div>-->
                        <!-- /.col -->
                        <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Facility</li>
            </ol>
          </div>-->
                        <!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    @yield("content")
                </div>
            </section>

            <!-- /.content-wrapper -->
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2023-2024 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0-rc
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- DataTables  & Plugins -->
    <script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ url('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>



    <!-- ChartJS -->
    <script src="{{ url('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ url('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ url('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->

    <script src="{{ url('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ url('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ url('dist/js/demo.js') }}"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('dist/js/pages/dashboard.js') }}"></script>

    <script>
        $(function() {
            $("example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('example1_wrapper .col-md-6:eq(0)');
            $('example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>


</body>

</html>