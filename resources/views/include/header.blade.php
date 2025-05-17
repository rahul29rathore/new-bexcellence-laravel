<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <title>B-Excellence | BuildMyInfra</title>
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/x-icon">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
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
    <link href="{{ asset('assets/css/closed-sidemenu.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/common.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>
</head>

<body class="main-body app sidebar-mini">
    <div id="global-loader">
        <img src="assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <div class="page">
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar sidebar-scroll ps ps--active-y">
            <div class="main-sidebar-header active">
                <a class="desktop-logo logo-light active" href="{{ url('/dashboard') }}"><img
                        src="assets/img/brand/logo.png" class="main-logo" alt="logo"></a>
                <a class="logo-icon mobile-logo icon-light active" href="index.php"><img
                        src="assets/img/brand/favicon.png" class="logo-icon" alt="logo"></a>
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
                    <li class="side-item side-item-category">Main Admin</li>
                    <!-- <li class="slide">
                                <a class="side-menu__item" data-toggle="slide">
                                    <i class="bx bxs-dashboard tx-20 mr-3"></i>
                                    <span class="side-menu__label">Dashboard</span>
                                    <i class="angle fe fe-chevron-down"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li><a class="slide-item" href="#">Master</a></li>
                                    <li><a class="slide-item" href="#">PMT</a></li>
                                    <li><a class="slide-item" href="#">Procurement</a></li>
                                    <li><a class="slide-item" href="#">Site Engineer</a></li>
                                    <li><a class="slide-item" href="#">Calculator</a></li>
                                    <li><a class="slide-item" href="#">Documents</a></li>
                                    <li><a class="slide-item" href="#">13SQFT Documents</a></li>
                                    <li><a class="slide-item" href="#">AM</a></li>
                                    <li><a class="slide-item" href="#">Small Projects</a></li>
                                </ul>
                            </li> -->
                    <li class="slide">
                        <a class="side-menu__item" href="dashboard.php">
                            <i class="bx bxs-dashboard tx-20 mr-3"></i>
                            <span class="side-menu__label">Dashboard</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide">
                            <i class="bx bx-data tx-20 mr-3"></i>
                            <span class="side-menu__label">Master Data</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="procurement-item-master.php">Item Master</a></li>
                            <li><a class="slide-item" href="procurement-vendor-master.php">Vendor Master</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide">
                            <i class="bx bx-rupee tx-20 mr-3"></i>
                            <span class="side-menu__label">Expenses</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="site-engg-travel-expenses.php">Travel Expense</a></li>
                            <li><a class="slide-item" href="site-engg-material-expenses.php">Material Expense</a></li>
                            <li><a class="slide-item" href="site-engg-manpower-expenses.php">Manpower</a></li>
                            <li><a class="slide-item" href="site-engg-other-expenses.php">Food/Accomodation</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="site-engg-attendance.php">
                            <i class="bx bx-calendar tx-20 mr-3"></i>
                            <span class="side-menu__label">Attendance</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="sales-lead.php">
                            <i class="bx bx-pie-chart tx-20 mr-3"></i>
                            <span class="side-menu__label">Sales</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide">
                            <i class="bx bx-layer tx-20 mr-3"></i>
                            <span class="side-menu__label">Project/PID Master</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="commercial-project-list.php">Commercial</a></li>
                            <li><a class="slide-item" href="set-project-list.php">SET</a></li>
                            <li><a class="slide-item" href="amc-project-list.php">AMC/Manage Support</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide">
                            <i class="bx bx-folder-open tx-20 mr-3"></i>
                            <span class="side-menu__label">Project Management</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="purchase-requisition.php">Purchase Requisition</a></li>
                            <li><a class="slide-item" href="small-project-list.php">Small Projects</a></li>
                            <li><a class="slide-item" href="boq-for-support.php">BOQ for Support</a></li>
                            <li><a class="slide-item" href="engg-daily-update.php">Engineers Daily Update</a></li>
                            <li><a class="slide-item" href="support-tool.php">Support Tool</a></li>
                            <li><a class="slide-item" href="petty-cash.php">Petty Cash</a></li>
                            <li><a class="slide-item" href="site-audit.php">Site Audit</a></li>
                            <!-- <li><a class="slide-item" href="mdc-list.php">Material Delivery Challan</a></li>
                                    <li><a class="slide-item" href="wcc-list.php">Work Completion Certificate</a></li> -->
                            <li><a class="slide-item" href="material-replacement.php">Material Replacement</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide">
                            <i class="bx bx-hard-hat tx-20 mr-3"></i>
                            <span class="side-menu__label">Procurement</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="procurement-pr.php">Purchase Requisition</a></li>
                            <li><a class="slide-item" href="procurement-po-project.php">Purachase Order</a></li>
                            <li><a class="slide-item" href="grn.php">GRN</a></li>
                            <li><a class="slide-item" href="inventory-management.php">Inventory Management</a></li>
                            <li><a class="slide-item" href="delivery-challan.php">Delivery Challan</a></li>
                            <li><a class="slide-item" href="invoice-processing.php">Invoice Processing</a></li>
                            <li><a class="slide-item" href="#">Robust Reporting</a></li>
                            <li><a class="slide-item" href="report-item-po-wise.php">Item/PO Wise Report</a></li>
                            <li><a class="slide-item" href="procurement-payment.php">Payment Dashboard</a></li>
                            <li><a class="slide-item" href="assets.php">Assets</a></li>
                            <li><a class="slide-item" href="procurement-expense.php">Expenses</a></li>
                            <li><a class="slide-item" href="mdc-list.php">Material Delivery Challan</a></li>
                            <li><a class="slide-item" href="wcc-list.php">Work Completion Certificate</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide">
                            <i class="bx bx-file tx-20 mr-3"></i>
                            <span class="side-menu__label">BMI Documents</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="new-mdc-list.php">MDC</a></li>
                            <li><a class="slide-item" href="new-wcc-list.php">WCC</a></li>
                            <li><a class="slide-item" href="service-report.php">Service Report</a></li>
                            <li><a class="slide-item" href="rca-report.php">RCA Report</a></li>
                            <li><a class="slide-item" href="wwp-list.php">WWP</a></li>
                            <li><a class="slide-item" href="#">PID Wise Documents</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="clients.php">
                            <i class="bx bx-user-circle tx-20 mr-3"></i>
                            <span class="side-menu__label">Clients</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" href="users.php">
                            <i class="bx bx-group tx-20 mr-3"></i>
                            <span class="side-menu__label">Users</span>
                        </a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide">
                            <i class="bx bx-chart tx-20 mr-3"></i>
                            <span class="side-menu__label">HRMS</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="employees-list.php">Employee Dashboard</a></li>
                            <li><a class="slide-item" href="hq-attendance-report.php">HQ Attendance</a></li>
                            <li><a class="slide-item" href="site-engg-attendance-report.php">Site Engineer
                                    Attendance</a></li>
                            <li><a class="slide-item" href="new-joining-form.php">New Joining Data</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="javascript:void0;">
                            <i class="bx bx-file tx-20 mr-3"></i>
                            <span class="side-menu__label">Forms</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="training-feedback.php">Training Feedback</a></li>
                            <li class="sub-slide">
                                <a class="sub-side-menu__item" data-toggle="sub-slide" href="#">Evaluation <i
                                        class="sub-angle fe fe-chevron-down"></i></a>
                                <ul class="sub-slide-menu">
                                    <li><a class="sub-slide-item" href="employees-evaluation.php">Employee
                                            Evaluation</a></li>
                                    <li><a class="sub-slide-item" href="sales-evaluation.php">Sales Evaluation</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="slide-item" href="engineer-feedback.php">Engineer's Feedback</a></li>
                            <li><a class="slide-item" href="manager-feedback.php">Manager's Feedback</a></li>
                            <li><a class="slide-item" href="sales-feedback.php">Sales Feedback</a></li>
                            <li><a class="slide-item" href="set-feedback.php">SET Feedback</a></li>
                            <li><a class="slide-item" href="sdt-feedback.php">SDT Feedback</a></li>
                            <li><a class="slide-item" href="procurement-feedback.php">Procurement Feedback</a></li>
                            <li><a class="slide-item" href="it-feedback.php">IT Feedback</a></li>
                            <li><a class="slide-item" href="marketing-feedback.php">Marketing Feedback</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="javascript:void0;">
                            <i class="bx bx-money-withdraw tx-20 mr-3"></i>
                            <span class="side-menu__label">P&L</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="pnl-commercial-set.php">Commercial/SET</a></li>
                            <li><a class="slide-item" href="pnl-boq-dashboard.php">BOQ Dashboard</a></li>
                            <li><a class="slide-item" href="sales-data-fyi.php">Sales Data FYI</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="javascript:void0;">
                            <i class="bx bx-list-ul tx-20 mr-3"></i>
                            <span class="side-menu__label">Miscellaneous</span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="po.php">PO</a></li>
                            <li><a class="slide-item" href="boq.php">BOQ</a></li>
                            <li><a class="slide-item" href="invoice.php">Invoice</a></li>
                            <li><a class="slide-item" href="asset-management.php">Asset Management</a></li>
                            <li><a class="slide-item" href="questionnaire.php">Questionnaire</a></li>
                            <li><a class="slide-item" href="payment-update.php">Payment Update</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="ps__rail-x">
                <div class="ps__thumb-x" tabindex="0"></div>
            </div>
            <div class="ps__rail-y">
                <div class="ps__thumb-y" tabindex="0"></div>
            </div>
        </aside>
        <div class="main-content app-content">
            <div class="main-header sticky side-header nav nav-item sticky-pin active">
                <span class="header-toggle">
                    <i class="fa fa-angle-up"></i>
                </span>
                <div class="container-fluid">
                    <div class="main-header-left ">
                        <div class="responsive-logo">
                            <a href="index.php"><img src="assets/img/brand/logo.png" class="logo-1"
                                    alt="logo"></a>
                            <a href="index.php"><img src="assets/img/brand/favicon.png" class="logo-2"
                                    alt="logo"></a>
                        </div>
                        <div class="app-sidebar__toggle" data-toggle="sidebar">
                            <a class="open-toggle" href="javascript:void0;"><i
                                    class="header-icon fe fe-align-left"></i></a>
                            <a class="close-toggle" href="javascript:void0;"><i class="header-icons fe fe-x"></i></a>
                        </div>
                        <div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
                            <input class="form-control" placeholder="Search for anything..." type="search">
                            <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
                        </div>
                    </div>
                    <div class="main-header-right">
                        <div class="panel-switcher">
                             <a href="{{ url('/bmi-dashboard') }}" class="active">B-EXCELLENCE</a>
                        <a href="{{ url('/13sqft/13sqft-dashboard') }}" >13SQFT</a>
                        <a href="{{ url('/beware/beware-dashboard') }}">BEWARE</a>
                        </div>
                        <div class="nav nav-item  navbar-nav-right ml-auto">
                            <div class="dropdown main-profile-menu nav nav-item nav-link">
                                <a class="profile-user d-flex"><img alt="" src="assets/img/faces/6.jpg"></a>
                                <div class="dropdown-menu">
                                    <div class="main-header-profile bg-primary p-3">
                                        <div class="d-flex wd-100p">
                                            <div class="main-img-user"><img alt=""
                                                    src="assets/img/faces/6.jpg"></div>
                                            <div class="ml-3 my-auto">
                                                <h6>Rahul Rathore</h6>
                                                <span>Sr. Full Stack Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="profile.html"><i
                                            class="bx bx-user-circle"></i>Profile </a>
                                    <a class="dropdown-item" href="editprofile.html"><i class="bx bx-cog"></i> Edit
                                        Profile </a>
                                    <a class="dropdown-item" href="mail.html"><i class="bx bxs-inbox"></i>Inbox </a>
                                    <a class="dropdown-item" href="chat.html"><i class="bx bx-envelope"></i>Messages
                                    </a>
                                    <a class="dropdown-item" href="editprofile.html"><i class="bx bx-slider-alt"></i>
                                        Account Settings </a>
                                    <a class="dropdown-item" href="login.php"><i class="bx bx-log-out"></i> Sign Out
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown main-header-message right-toggle">
                                <a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="3" y1="12" x2="21" y2="12"></line>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <line x1="3" y1="18" x2="21" y2="18"></line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jumps-prevent"></div>
