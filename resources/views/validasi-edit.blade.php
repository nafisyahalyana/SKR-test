{{-- <div class="mt-5 col-8 m-auto">
    <form action="">
        <div class="mb-3">
            <label for="ruangan">Ruangan</label>
            <input type="text" class="form-control" id="ruangan" required>
        </div>
    </form>
    <!-- Be present above all else. - Naval Ravikant -->
</div> --}}
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>SIRUANG | Ruangan</title>
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
              
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">
                <a
                  class="nav-link waves-effect waves-dark"
                  href="javascript:void(0)"
                  ><i class="mdi mdi-magnify fs-4"></i
                ></a>
                <form class="app-search position-absolute">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-bell font-24"></i>
                </a>
               
              </li>
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
                <a class="dropdown-item" href="javascript:void(0)" onclick="logout()">
                  <i class="fa fa-power-off me-1 ms-1"></i> Logout
                </a>
                
                <script>
                function logout() {
                  // Redirect ke halaman login
                  window.location.href = "/";
                }
                </script>
                
                  
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
                  ><span class="hide-menu">Dashboard</span></a
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
              <h4 class="page-title">Edit Data</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
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
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="mt-5 col-5 m-auto">
            <form id="bookingForm" action="/validasi/{{ $booking->id }}" method="POST" class="needs-validation" novalidate autocomplete="off">
                @csrf
                   <!-- Start Input Name -->
                 <div class="form-group">
                   <label for="inputName">Nama</label>
                   <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $booking->nama }}" required/>
                   {{-- <small class="form-text text-muted">Silahkan isi nama anda</small> --}}
                   {{-- <input type="text" id="nama" name="nama" value="{{ auth()->user()->name }}" readonly> --}}
                 </div>
       
                 <div class="form-group">
                   <label for="inputName">Bidang</label>
                   <input type="text" class="form-control" id="bidang" name="bidang" placeholder="Nama Bidang" value="{{ $booking->bidang }}" required />
                   <small class="form-text text-muted">Silahkan bidang anda</small>
                 </div>
                 <!-- End Input -->
       
                 <!-- Start Input Telephone -->
                 <div class="form-group">
                   <label for="inputPhone">Nomor Handphone</label>
                   <input type="tel" class="form-control" id="no_hp" name="no_hp" placeholder="08xxxxxxx" pattern="\d{4}\d{4}\d{4}" value="{{ $booking->no_hp }}" required />
                   <small class="form-text text-muted"></small>
                 </div>
                 <!-- End Input Telephone -->
         
                 <!-- Start Input Date , Start Time and End Time -->
                 <div class="form-row">
                   <!-- Start Input Date -->
                   <div class="form-group col-md-4">
                     <label for="inputDate">Tanggal</label>
                     <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $booking->tanggal }}" required />
                     <small class="form-text text-muted">Silahkan pilih waktu rapat</small>
                   </div>
                   <!-- End Input Date -->
       
                   <!-- End Input End Time -->
       
                   <!-- Start Input Start Time -->
                   <div class="form-group col-md-4">
                     <label for="Mulai">Waktu mulai</label>
                     <input type="time" class=" form-control" id="waktu_mulai" name="waktu_mulai" value="{{ $booking->waktu_mulai }}" required><br>
                   </div>
                   <!-- End Input Start Time -->
         
                   <!-- Start Input End Time -->
                   <div class="form-group col-md-4">
                     <label for="Berakhir">Waktu berakhir</label>
                     <input type="time" class="form-control" id="waktu_berakhir" name="waktu_berakhir" value="{{ $booking->waktu_berakhir }}" required><br>
                   </div>
                   <!-- End Input End Time -->
                 </div>
                 <!-- End Input Date , Start Time and End Time -->
         
                 <!-- Start Check Room Type -->
                 <div class="form-group pl-1 pr-2">
                   <legend class="col-form-label pt-0">Pilih Ruangan</legend>
                   <div class="d-flex flex-row justify-content-between align-items-center">
                     <select class="form-control mr-1" id="ruangan" name="ruangan" value="{{ $booking->ruangan }}"required>
                       <option value="" disabled selected>Pilih Ruangan</option>
                       {{-- <option value="{{ $booking->ruangan->id }}">{{ $booking->ruangan->ruangan }}</option> --}}
                       @foreach ($ruangan as $r)
                <option value="{{ $r->id }}">{{ $r->ruangan }}</option>
                @endforeach
                     </select>
                   </div>
                 </div>
                 <!-- End Check Room Type -->
                 
                 <!-- Start Input Remark -->
                 <div class="form-group">
                   <label for="textAreaRemark">Keperluan</label>
                   <input class="form-control" name="keperluan" id="keperluan" rows="2" placeholder="Silahkan tuliskan kegiatan" value="{{ $booking->keperluan }}" required></input>
                   
                   
                 </div>
                 <!-- End Input Remark -->
         
                 <!-- Start Submit Button -->
                 <button class="btn btn-primary btn-block col-lg-2" type="submit"><a href="jadwal"></a>Submit</button>
                 <!-- End Submit Button -->
               </form>
    <!-- Be present above all else. - Naval Ravikant -->
</div>
        </div>
      </div>
    </div>
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    
  </body>

</html>

