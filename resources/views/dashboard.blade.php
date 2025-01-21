<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SIRUANG | Dashboard</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{ asset('../assets/images/logo.png') }}"
    />
    <!-- Custom CSS -->
    <link href="{{ asset('../assets/libs/flot/css/float-chart.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('../dist/css/style.min.css') }}" rel="stylesheet" />
    <link
      href="../assets/libs/fullcalendar/dist/fullcalendar.min.css"
      rel="stylesheet"
    />
    <link href="../assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="{{ asset('../assets/images/logo.png') }}"
                  alt="homepage"
                  class="light-logo"
                  width="45"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
                <!-- dark Logo text -->
                <img
                  src="{{ asset('../assets/images/logo-text.png') }}"
                  alt="homepage"
                  class="light-logo"
                  width="115"
                />
              </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              
              
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
          
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="{{ asset('../assets/images/users/1.jpg') }}"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                <div class="dropdown-divider"></div>
                <span class="dropdown-item-text">Hallo, {{ Auth::user()->name }}! anda {{ Auth::user()->role->name }}</span>
                <a class="dropdown-item" href="logout" onclick="logout()">
                  <i class="fa fa-power-off me-1 ms-1"></i> Keluar
                </a>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5" color="green">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="dashboard"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Beranda</span></a
                >
              </li>
              
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Dashboard</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  {{-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol> --}}
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            
            <!-- Column -->
            @if(Auth::user()->role_id != 1)
            @else
            {{-- @foreach (auth()->user()->notifications as $notification)
            <div class="alert alert-info">
                {{ $notification->data['message'] }}
            </div>
            @endforeach --}}

            <div class="col-md-6 col-lg-3 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-success ">
                  <h1 class="font-light text-white align-right">
                    <i class="mdi mdi-account-plus"></i>
                  </h1>
                  <h6 class="text-white text-decoration: none"><a href="pengguna" style="color:white">Pengguna</a></h6>
                  {{-- <p class="text-white redup text-right" style="font-size: 24px; opacity: 0.7;">{{ $data }}</p> --}}
                </div>
              </div>
            </div>
            @endif
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-collage"></i>
                  </h1>
                  <h6 class="text-white redup text-decoration: none"><a href="ruangan" style="color:white">Ruangan</a></h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-danger">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-border-outside"></i>
                  </h1>
                  <h6 class="text-white text-decoration: none"><a href="peminjaman" style="color:white">Peminjaman</a></h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-info">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-arrow-all"></i>
                  </h1>
                  <h6 class="text-white"><a href="jadwal" style="color:white">Jadwal</a></h6>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card-body b-1 calender-sidebar">
                      <div id="calendar"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('../assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/dist/js/jquery.ui.touch-punch-improved.js') }}"></script>
    <script src="{{ asset('/dist/js/jquery-ui.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('../assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('../dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('../dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('../dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('../assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('../assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('../assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('../assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('../assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('../assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('../dist/js/pages/chart/chart-page-init.js') }}"></script>
    <script src="{{ asset('/assets/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('/dist/js/pages/calendar/cal-init.js') }}"></script>
  </body>
</html>

