<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>TravelAja</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/css/ionicons.css">
  <link rel="stylesheet" href="../assets/vendors/iconfonts/typicons/src/font/typicons.css">
  <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/css/shared/style.css">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/demo_1/style.css">
  <!-- End Layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
     <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="{{ url('/') }}">
            <!-- <img src="../assets/images/logo.svg" alt="logo" /> </a> -->
            | TravelAja
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="../assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav ml-auto">
           {{--  <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li> --}}
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">{{Auth::user()->name}}</p>
                  <p class="font-weight-light text-muted mb-0">{{ Auth::user()->email }}</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial sidebar -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->name }}</p>
                  <p class="designation">kosong</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#master_data" aria-expanded="false" aria-controls="master_data">
                <i class="menu-icon typcn typcn-coffe"></i>
                <span class="menu-title">Master</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="master_data">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a href="{{ url('/d_user') }}" class="nav-link">Data User</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/d_petugas') }}" class="nav-link">Data Petugas</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Data Tiket</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/d_kota') }}" class="nav-link">Data Kota</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/d_partner') }}" class="nav-link">Data Partner</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#pesawat" aria-expanded="false" aria-controls="pesawat">
                <i class="menu-icon typcn typcn-coffe"></i>
                <span class="menu-title">Pesawat</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="pesawat">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a href="{{ url('/p_pesawat') }}" class="nav-link">Data Pesawat</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/p_bandara') }}" class="nav-link">Data Bandara</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#kereta_api" aria-expanded="false" aria-controls="kereta_api">
                <i class="menu-icon typcn typcn-coffe"></i>
                <span class="menu-title">Kereta Api</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="kereta_api">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a href="{{ url('/k_kereta') }}" class="nav-link">Data Kereta</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/k_stasiun') }}" class="nav-link">Data Stasiun</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="{{ url('/rute') }}" class="nav-link">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Jadwal Rute</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Laporan</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- end off partial sidebar -->
        <!-- mainpanel -->
        <div class="main-panel">
          <div class="content-wrapper">
            {{-- <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <div class="card-body pb-0">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title mb-0">Statistik Penumpang</h4>
                      <p class="font-weight-semibold mb-0">+1.37%</p>
                    </div>
                    <h3 class="font-weight-medium mb-4">184.42K</h3>
                  </div>
                  <canvas class="mt-n4 chartjs-render-monitor" height="90" id="total-revenue" width="323" style="display: block;">
                </canvas></div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <div class="card-body pb-0">
                    <div class="d-flex justify-content-between">
                      <h4 class="card-title mb-0">Jumlah Pesanan</h4>
                      <p class="font-weight-semibold mb-0">-2.87%</p>
                    </div>
                    <h3 class="font-weight-medium">147.7K</h3>
                  </div>
                  <canvas class="mt-n3 chartjs-render-monitor" height="90" id="total-transaction" width="323" style="display: block;">
                </canvas></div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="d-flex align-items-center pb-2">
                          <div class="dot-indicator bg-danger mr-2"></div>
                          <p class="mb-0">Active Admin</p>
                        </div>
                        <h4 class="font-weight-semibold">10</h4>
                        <div class="progress progress-md">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="10"></div>
                        </div>
                      </div>
                      <div class="col-md-6 mt-4 mt-md-0">
                        <div class="d-flex align-items-center pb-2">
                          <div class="dot-indicator bg-success mr-2"></div>
                          <p class="mb-0">Active Users</p>
                        </div>
                        <h4 class="font-weight-semibold">35</h4>
                        <div class="progress progress-md">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="35"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card average-price-card">
                <div class="card text-white">
                  <div class="card-body">
                    <div class="d-flex justify-content-between pb-2 align-items-center">
                      <h2 class="font-weight-semibold mb-0">4,624</h2>
                      <div class="icon-holder">
                        <i class="mdi mdi-briefcase-outline"></i>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between">
                      <h5 class="font-weight-semibold mb-0">Jumlah Ticket</h5>
                      <p class="text-white mb-0">Since last month</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
            @yield('content')  
          </div>
        </div>
        <!-- endoff mainpanel -->
      </div>
      <!-- end partial -->

  </div>
  <!-- plugins:js -->
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../assets/js/shared/off-canvas.js"></script>
  <script src="../assets/js/shared/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../assets/js/demo_1/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @yield('script')
</body>
</html>