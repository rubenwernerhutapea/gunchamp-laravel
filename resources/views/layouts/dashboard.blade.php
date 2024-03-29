<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex,nofollow" />
    <title>@yield('name')</title>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/img/logo-white.png') }}" />

    <!-- Custom CSS -->
    @stack('prepend-style')
    <link href="{{ url('/backend/css/style.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('/backend/css/mystyle.css') }}" />
    @stack('addon-style')

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Main Wrapper -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      <!-- Topbar header -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin6">
            <!-- logo -->
            <a class="navbar-brand" href="{{ route('home') }}">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!-- Dark Logo icon -->
                <img class="m-3" src="{{ url('/img/logo-title.png') }}" height="30" alt="homepage" />
              </b>
              <!--End Logo icon -->
            </a>
            <!-- End logo -->

            <!-- toggle and nav items -->
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          </div>
          <!-- End Logo -->

          <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5" style="background-color: #0b0e40">
            <ul class="navbar-nav d-none d-md-block d-lg-none">
              <li class="nav-item">
                <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
              </li>
            </ul>

            <!-- Right side toggle and nav items -->
            <ul class="navbar-nav ms-auto d-flex align-items-center">
              <!-- User profile -->
              <li>
                <a class="profile-pic" href="#">
                  <span class="text-white me-2">Halo, {{ Auth::user()->name }}</span>
                  <img src="{{ url('/img/logo-circle.png') }}" alt="user-img" width="36" class="img-circle" />
                </a>
              </li>
              <!-- End User profile -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- End Topbar Header-->

      <!-- Left Sidebar -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li class="sidebar-item pt-2">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                  <i class="far fa-clock" aria-hidden="true"></i>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard-profile') }}" aria-expanded="false">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span class="hide-menu">Profil</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link sidebar-link-active" href="{{ route('dashboard-lomba') }}" aria-expanded="false">
                  <i class="fa fa-table" aria-hidden="true"></i>
                  <span class="hide-menu">Lomba Saya</span>
                </a>
              </li>
              <li class="text-center p-20 upgrade-btn">
                <a href="{{ route('home') }}" class="btn d-grid btn-danger text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- End Left Sidebar -->
        
      <div class="page-wrapper">
        {{-- page content --}}
        @yield('content')

        <!-- Footer -->
        <footer class="footer text-center">2022 © Gunadarma Championship. All Rights Reserved</footer>
        <!-- End footer -->
      </div>

      <!-- End page wrapper -->
    </div>
    <!-- End Wrapper -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    @stack('prepend-script')
    <script src="{{ url('/backend/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ url('/backend/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('/backend/js/app-style-switcher.js') }}"></script>
    {{-- <script src="{{ url('/backend/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script> --}}
    <!--Wave Effects -->
    {{-- <script src="{{ url('/backend/js/waves.js') }}"></script> --}}
    <!--Menu sidebar -->
    <script src="{{ url('/backend/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ url('/backend/js/custom.js') }}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    {{-- <script src="{{ url('/backend/plugins/bower_components/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ url('/backend/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ url('/backend/js/pages/dashboards/dashboard1.js') }}"></script> --}}
    @stack('addon-script')
  </body>
</html>
