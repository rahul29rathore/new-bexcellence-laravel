<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <title>@yield('title', 'Beware | BuildMyInfra')</title>

    <!-- CSS Links -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/x-icon">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="{{ asset('assets/plugins/morris.js/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/perfect-scrollbar/p-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/sumoselect/sumoselect.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datetimepicker/amazeui.datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datetimepicker/jquery.simple-dtpicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/pickerjs/picker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/spectrum-colorpicker/spectrum.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/rating/ratings.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet">

    <!-- Main CSS Files -->
    <link href="{{ asset('assets/css/closed-sidemenu.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/common.css') }}" rel="stylesheet">
</head>


<body class="main-body app sidebar-mini">
    {{-- Global Loader --}}
    <div id="global-loader">
        <img src="{{ asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    {{-- Sidebar --}}
    <aside class="app-sidebar sidebar-scroll ps ps--active-y">
        <div class="main-sidebar-header active">
            <a class="desktop-logo logo-light active" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/brand/logo.png') }}" class="main-logo" alt="logo">
            </a>
            <a class="logo-icon mobile-logo icon-light active" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/brand/favicon.png') }}" class="logo-icon" alt="logo">
            </a>
        </div>

        <div class="main-sidemenu is-expanded">
            <div class="app-sidebar__user clearfix active">
                <div class="dropdown user-pro-body">
                    <div>
                        <img alt="user-img" class="avatar avatar-xl brround" src="assets/img/faces/6.jpg">
                        <span class="avatar-status profile-status bg-green"></span>
                    </div>
                    <div class="user-info">
                        <h4 class="font-weight-semibold mt-3 mb-0">Rahul Rathore</h4>
                        <span class="mb-0 text-muted">Sr. Full Stack Developer</span>
                    </div>
                </div>
            </div>
            <ul class="side-menu open">
                <li class="side-item side-item-category">BEWARE Panel</li>
                <li class="slide"><a class="side-menu__item" href="{{ url('13sqft-dashboard') }}"><i
                            class="bx bxs-dashboard tx-20 mr-3"></i>Dashboard</a></li>
                <li class="slide"><a class="side-menu__item" href="{{ url('13sqft-mdc') }}"><i
                            class="bx bx-file-blank tx-20 mr-3"></i>MDC</a></li>
                <li class="slide"><a class="side-menu__item" href="{{ url('13sqft-wcc') }}"><i
                            class="bx bx-file-find tx-20 mr-3"></i>WCC</a></li>
                <li class="slide"><a class="side-menu__item" href="{{ url('13sqft-po') }}"><i
                            class="bx bx-file tx-20 mr-3"></i>PO</a></li>
                <li class="slide"><a class="side-menu__item" href="{{ url('13sqft-delivery-challan') }}"><i
                            class="bx bx-file-blank tx-20 mr-3"></i>Delivery Challan</a></li>
                <li class="slide">
                    <a class="side-menu__item" href="beware-warranty-tracking.php">
                        <i class="bx bx-time-five tx-20 mr-3"></i>
                        <span class="side-menu__label">Warranty Tracker</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="beware-support-tool.php">
                        <i class="bx bx-chat tx-20 mr-3"></i>
                        <span class="side-menu__label">Support Tool</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    {{-- Main Content --}}
    <div class="main-content">
        <div class="main-header sticky side-header nav nav-item sticky-pin active">
            <span class="header-toggle"><i class="fa fa-angle-up"></i></span>

            <div class="container-fluid">
                <div class="main-header-left">
                    <div class="responsive-logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/img/brand/logo.png') }}" class="logo-1"
                                alt="logo"></a>
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/img/brand/favicon.png') }}" class="logo-2"
                                alt="logo"></a>
                    </div>

                    <div class="app-sidebar__toggle" data-toggle="sidebar">
                        <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                        <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
                    </div>

                    <div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
                        <input class="form-control" placeholder="Search for anything..." type="search">
                        <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
                    </div>
                </div>

                <div class="main-header-right">
                    <div class="panel-switcher">
                        <a href="{{ url('/bmi-dashboard') }}">B-EXCELLENCE</a>
                        <a href="{{ url('/13sqft/13sqft-dashboard') }}">13SQFT</a>
                        <a href="{{ url('/beware/beware-dashboard') }}" class="active">BEWARE</a>
                    </div>

                    <div class="nav nav-item navbar-nav-right ml-auto">
                        <div class="dropdown main-profile-menu nav nav-item nav-link">
                            <a class="profile-user d-flex"><img alt="" src="{{ asset('assets/img/faces/6.jpg') }}"></a>
                            <div class="dropdown-menu">
                                <div class="main-header-profile bg-primary p-3">
                                    <div class="d-flex wd-100p">
                                        <div class="main-img-user"><img alt=""
                                                src="{{ asset('assets/img/faces/6.jpg') }}"></div>
                                        <div class="ml-3 my-auto">
                                            <h6>Dheeraj kumar</h6>
                                            <span>Sr. Full Stack Developer</span>
                                        </div>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="{{ url('profile') }}"><i class="bx bx-user-circle"></i>
                                    Profile</a>
                                <a class="dropdown-item" href="{{ url('login') }}"><i class="bx bx-log-out"></i>
                                    Sign Out</a>
                            </div>
                        </div>
                        <div class="dropdown main-header-message right-toggle">
                            <a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
                                <i class="header-icon fe fe-align-justify"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>