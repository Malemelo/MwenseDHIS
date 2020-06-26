<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Health Information system &amp; for all the health institutes in Mwense Discrict">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="BLIS Systems Ltd.">
    <title>Mwense District | Health Information System</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/dragula.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css')}}">
    <!-- END: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/wizard.css')}}">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-analytics.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-dark">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon bx bx-chat"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand">Full Screen <i class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search">Search Patients <i class="ficon bx bx-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                            <input class="input" type="text" placeholder="Search patient records..." tabindex="-1" data-search="template-search">
                            <div class="search-input-close"><i class="bx bx-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name">{{ Auth::user()->name }}</span><span class="user-status text-muted">Available</span></div><span><img class="round" src="{{ Auth::user()->profile_picture ?? asset('app-assets/images/mwense/dammy.png') }}" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="#"><i class="bx bx-user mr-50"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="bx bx-envelope mr-50"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="bx bx-check-square mr-50"></i> Task</a><a class="dropdown-item" href="#"><i class="bx bx-message mr-50"></i> Chats</a>
                            <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i class="bx bx-power-off mr-50"></i>
                                Logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('home')}}">
                    <div class="brand-logo"><img class="logo" src="{{ asset('app-assets/images/mwense/mwense.png')}}" /></div>
                    <h2 class="brand-text mb-0">MDHIS</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            <li class=" navigation-header"><span>Biography Panel</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="priority-low"></i><span class="menu-title" data-i18n="Extra Components">Patients</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('new_patient')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Avatar">Add Patient</span></a>
                    </li>
                    <li><a href="{{route('patients')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Chips">List Patients</span></a>
                    </li>
                </ul>
            </li>

            <li class=" navigation-header"><span>Settings Panel</span></li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="gear"></i><span class="menu-title" data-i18n="Extra Components">Communicable</span></a>
                <ul class="menu-content">
                    <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Avatar">Add Disease</span></a>
                    </li>
                    <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Avatar">List Diseases</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="gear"></i><span class="menu-title" data-i18n="Extra Components">Non Communicable</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('new_non_communicable')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Avatar">Add Disease</span></a>
                    </li>
                    <li><a href="{{route('non_communicables')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Avatar">List Diseases</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="gear"></i><span class="menu-title" data-i18n="Extra Components">Villages</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('add_village')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Avatar">Add Village</span></a>
                    </li>
                    <li><a href="{{route('villages')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Avatar">List Villages</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="gear"></i><span class="menu-title" data-i18n="Extra Components">Health Facilities</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('new_facility')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Avatar">Add Facility</span></a>
                    </li>
                    <li><a href="{{route('facilities')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Avatar">List Facilities</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class=" col-12 mb-2">
                <div class="col-12">
                    <img  alt="mwense_district_health" src="{{ asset('app-assets/images/mwense/mdhis_banner.png') }}" />
                </div>
            </div>
        </div>
        <div class="content-body">
         @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-dark">
    <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; Mwense District Health Information System</span><span class="float-right d-sm-inline-block d-none">developed with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="#" target="_blank">BLIS Systems Ltd.</a></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
<script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
<script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/dragula.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset ('app-assets/js/scripts/configs/vertical-menu-dark.js')}}"></script>
<script src="{{ asset('app-assets/js/core/app-menu.js')}}"></script>
<script src="{{ asset('app-assets/js/core/app.js')}}"></script>
<script src="{{ asset ('app-assets/js/scripts/components.js')}}"></script>
<script src="{{ asset ('app-assets/js/scripts/footer.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset ('app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
<!-- END: Page JS-->
<script src="{{ asset('app-assets/js/scripts/forms/wizard-steps.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>

</body>
<!-- END: Body-->

</html>
