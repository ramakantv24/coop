<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title')</title>
  <!-- Bootstrap core CSS -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('public/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('public/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('public/backend/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/backend/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('public/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('public/backend/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('public/backend/plugins/summernote/summernote-bs4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('public/backend/dist/css/custom.css') }}">

  <script src="{{ asset('public/backend/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('public/backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>



  <style>
    .w-5 {
      width: 35px;
    }

    nav {
      /* padding: 10px; */
    }

    .main-footer {
      padding-top: 1rem;
    }

    .z-0 {
      display: block;
      margin-bottom: 25px;
    }
  </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">


    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('public/backend/dist/img/logo.png') }}" alt="AdminLTELogo" height="60" >
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
       <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <img src="{{ asset('public/backend/dist/img/user.png') }}" width="30px" class="rounded-circle" alt="User Image"> <span class="admin-txt">{{ Auth::user()->name }}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            <a class="dropdown-item" href="{{ url('admin/profile') }}">My Profile</a>
            <a class="dropdown-item" href="{{ url('admin/change-password') }}">Change Password</a>

            <a class="dropdown-item" href="{{ url('admin/logout') }}" onclick="event.preventDefault();
								 document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" class="d-none">
              @csrf
            </form>

          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ asset('admin/cooperative')}}" class="brand-link">
        <!-- <img src="{{ asset('public/backend/dist/img/logo.png') }}" alt="Repairee Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <img src="{{ asset('public/backend/dist/img/logo.png') }}" alt="Repairee Logo" class=" ">
        <!-- <span class="brand-text font-weight-light">Coop</span> -->
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2" id="navside">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="{{ asset('admin/dashboard') }}" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ asset('admin/cooperative')}}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Cooperative
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ asset('admin/users')}}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Users
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>

            </li>

            <li class="nav-item">
              <a href="{{ asset('admin/loan/list')}}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Loan Mgt
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>

           

            <li class="nav-item">
              <a href="{{ asset('admin/course/list')}}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Course Mgt
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>

              <ul class="sub-menu">
                <li><a class="nav-link w-80" href="{{ asset('admin/course/list') }}">Course List</a></li>
                <li><a class="nav-link w-80" href="{{ asset('admin/subject/list') }}">Subject List</a></li>
                <li><a class="nav-link w-80" href="{{ asset('admin/chapter/list') }}">Chapter List</a></li>
              </ul>

            </li>

            <li class="nav-item">
              <a href="{{ asset('admin/insurance/list')}}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Insurance
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ asset('admin/reports')}}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Reports
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ asset('admin/transaction-list') }}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Loan Transaction List
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{ asset('admin/course/purchase/list') }}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Course Transaction List
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>
            
             <li class="nav-item">
              <a href="{{ asset('admin/setting') }}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Setting
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      {{-- <div class="content-header">
		  <div class="container-fluid">
			<div class="row mb-2">
			  <div class="col-sm-6">
				<h1 class="m-0">Dashboard</h1>
			  </div>
			  <div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				  <li class="breadcrumb-item"><a href="#">Home</a></li>
				  <li class="breadcrumb-item active">Dashboard v1</li>
				</ol>
			  </div>
			</div>
		  </div>
		</div> --}}
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          @yield('content')
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2023 </strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

  </div>
</body>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('public/backend/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('public/backend/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('public/backend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('public/backend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('public/backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('public/backend/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('public/backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('public/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('public/backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/backend/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/backend/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('public/backend/dist/js/pages/dashboard.js') }}"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.ckeditor').ckeditor();
  });
</script>
<script>
  $(function() {
    var current = location.pathname;
    $('#navside ul li a').each(function() {
      var $this = $(this);
      // if the current path is like this link, make it active
      if ($this.attr('href').indexOf(current) !== -1) {
        $this.addClass('active');
      }
    })
  })
</script>
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     var signupButton = document.querySelector('.btn-hide');
    //     var signupContainer = document.querySelector('.signup-container');

    //     signupButton.addEventListener('click', function() {
    //         signupContainer.style.display = 'none';
    //     });
    // });

    function validatePhoneNumber(input) {
        // Remove any non-digit characters
        input.value = input.value.replace(/\D/g, '');
    }
</script>
</html>