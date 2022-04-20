<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">

  <link rel="icon" href="/template/assets/images/logo/logo-mantau.png" type="image/x-icon">
  <link rel="shortcut icon" href="/template/assets/images/logo/logo-mantau.png" type="image/x-icon">
  <title>Beasiswa Balikpapan Tuntas</title>
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/fontawesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="/template/assets/css/chartist.css">
  <link rel="stylesheet" type="text/css" href="/template/assets/css/date-picker.css">
  <link rel="stylesheet" type="text/css" href="/template/assets/css/prism.css">
  <link rel="stylesheet" type="text/css" href="/template/assets/css/vector-map.css">

  <link rel="stylesheet" type="text/css" href="/template/assets/css/datatables.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/style.css">
  <link id="color" rel="stylesheet" href="/template/assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/responsive.css">

  <!-- Custom css-->
  <link rel="stylesheet" href="/template/assets/css/generate-profile.css">
  @yield("css")

</head>

<body>
  <!--  class="dark-only" -->
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="theme-loader">
      <div class="loader-p"></div>
    </div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start       -->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-main-header close-icon">
      <div class="main-header-right row m-0">
        <div class="main-header-left">
          <div class="logo-wrapper"><a href="/"><strong class="text-dark me-3">Beasiswa Balikpapan</strong></a></div>
          <div class="dark-logo-wrapper"><a href="/"><strong class="text-light">Beasiswa Balikpapan</strong></a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
        </div>

        <div class="nav-right col pull-right right-menu p-0">
          <ul class="nav-menus">
            <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
            <li class="onhover-dropdown p-0">
              <button class="btn btn-primary-light" type="button"><a href="/logout"><i data-feather="log-out"></i>Log out</a></button>
            </li>
          </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
      </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper sidebar-icon">
      <!-- Page Sidebar Start-->
      <header class="main-nav">
        @if(Auth::user()->mahasiswa)
        <div class="sidebar-user text-center"><a class="setting-primary" href="/profile"><i data-feather="settings"></i></a>
          <div id="profileImage" class="d-flex align-items-center justify-content-center m-auto"></div>
          <a href="#">
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->mahasiswa->nama }}</h6>
          </a>
          <p class="mb-0 font-roboto">{{ Auth::user()->role }}</p>
        </div>
        <nav>
          <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
              <ul class="nav-menu custom-scrollbar">
                <li class="back-btn">
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6>General </h6>
                  </div>
                </li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ url("/") }}"><i data-feather="home"></i><span>Dashboard</span></a></li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user"></i><span>Data Diri</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="/profile">Profile</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </div>
        </nav>
        @else
        <nav>
          <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
              <ul class="nav-menu custom-scrollbar">
                <li class="back-btn">
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-main-title">
                  <div class="mt-5">
                    <h6>Lengkapi Pendaftaran</h6>
                  </div>
                </li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ url("/insert-data-profile") }}"><i data-feather="user"></i><span>Data Profile</span></a></li>
              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </div>
        </nav>
        @endif
      </header>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid dashboard-default-sec">
          <div class="row">
            {{-- CODE HERE --}}

            @yield('content')

            {{-- END CODE --}}
          </div>
        </div>
        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 footer-copyright">
              <p class="mb-0">Copyright {{date('Y')}} © SCPK Kelompok 1</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- latest jquery-->
  <script src="/template/assets/js/jquery-3.5.1.min.js"></script>
  <!-- feather icon js-->
  <script src="/template/assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="/template/assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- Sidebar jquery-->
  <script src="/template/assets/js/sidebar-menu.js"></script>
  <script src="/template/assets/js/config.js"></script>
  <!-- Bootstrap js-->
  <script src="/template/assets/js/bootstrap/popper.min.js"></script>
  <script src="/template/assets/js/bootstrap/bootstrap.min.js"></script>
  <!-- Plugins JS start-->
  <!-- <script src="/template/assets/js/chart/chartist/chartist.js"></script>
    <script src="/template/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="/template/assets/js/chart/knob/knob.min.js"></script>
    <script src="/template/assets/js/chart/knob/knob-chart.js"></script>
    <script src="/template/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="/template/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="/template/assets/js/prism/prism.min.js"></script>
    <script src="/template/assets/js/clipboard/clipboard.min.js"></script>
    <script src="/template/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="/template/assets/js/counter/jquery.counterup.min.js"></script> -->
  <!-- <script src="/template/assets/js/counter/counter-custom.js"></script> -->
  <script src="/template/assets/js/custom-card/custom-card.js"></script>
  <script src="/template/assets/js/notify/bootstrap-notify.min.js"></script>
  <!-- <script src="/template/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/template/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/template/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="/template/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="/template/assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="/template/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="/template/assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="/template/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script> -->
  
  
    {{-- <script src="/template/assets/js/dashboard/default.js"></script> --}}


  {{-- <script src="/template/assets/js/notify/index.js"></script> --}}
    <script src="/template/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="/template/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="/template/assets/js/datepicker/date-picker/datepicker.custom.js"></script>

  <!-- <script src="/template/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="/template/assets/js/datatable/datatables/datatable.custom.js"></script> -->
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="/template/assets/js/script.js"></script>
  <script src="/template/assets/js/theme-customizer/customizer.js"></script>
  <!-- login js-->
  <!-- Plugin used-->

  {{-- CUSTOM SCRIPT HERE --}}
  @if(Auth::user()->mahasiswa)
  <script>
    var userName = `{{ Auth::user()->mahasiswa->nama }}`;
    userName = userName.split(" ");
    if(userName.length < 2){
      userName[1] = userName[0].charAt(0).toUpperCase();
    }
  </script>  
  @endif
  <script src="/template/assets/js/generate-profile.js"></script>
  @yield("script")
  {{-- END CUSTOM SCRIPT --}}
</body>

</html>