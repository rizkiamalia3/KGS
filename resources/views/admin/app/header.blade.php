<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Klinik Gigi Smile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('/template/images/logo.png') }}"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adtemp/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ URL::asset('/adtemp/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL::asset('/adtemp/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ URL::asset('/adtemp/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('/adtemp/dist/css/adminlte.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ URL::asset('/adtemp/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ URL::asset('/adtemp/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ URL::asset('/adtemp/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('/adtemp/dist/css/button.css') }}">
</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->


        <!-- Right navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ url('/') }}" class="nav-link">Go To The Website</a>
            </li>
          </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar elevation-4 sidebar-secondary-warning">
        <!-- Brand Logo -->
        <a href="{{ route('admin.dashboard') }}"class="brand-link navbar-secondary ">
          <img src="{{ URL::asset('template/images/favicon.png') }} "
               alt="Klinik Gigi Smile "
               class="brand-image rounded img-circle"
               style="opacity: .8"
               >
            <span class="brand-text " style="color:white" >Klinik Gigi Smile</span>
            </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-header">UPDATE PANEL</li>
              <li class="nav-item">
              <li class="nav-item has-treeview active menu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-database"></i>
                  <p>
                    Data Store
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.data_admin') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Data Admin</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.data_user') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Data User</p>
                        </a>
                    </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.data_doctor') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Doctor</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.data_reserve') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Reservasi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.data_slider') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Slider</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                      <i class="nav-icon fa fa-sign-out"></i>
                      <p>
                        Logout
                      </p>
                    </a>
                  </li>
                </ul>
              </li>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
