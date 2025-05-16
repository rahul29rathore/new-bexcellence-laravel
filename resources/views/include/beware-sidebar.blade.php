<aside class="app-sidebar sidebar-scroll ps">
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
                    <img alt="user-img" class="avatar avatar-xl brround" src="{{ asset('assets/img/faces/6.jpg') }}">
                    <span class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0">dheeraj kumar</h4>
                    <span class="mb-0 text-muted">Sr. Full Stack Developer</span>
                </div>
            </div>
        </div>
        <ul class="side-menu open">
            <li class="side-item side-item-category">BEWARE Panel</li>
            <li class="slide">
                <a class="side-menu__item">
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
                    <li><a class="slide-item">Item Master</a></li>
                    <li><a class="slide-item">Vendor Master</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item">
                    <i class="bx bx-gift tx-20 mr-3"></i>
                    <span class="side-menu__label">Sales & Offer</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item">
                    <i class="bx bx-file-blank tx-20 mr-3"></i>
                    <span class="side-menu__label">Purchase Order</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item">
                    <i class="bx bx-rupee tx-20 mr-3"></i>
                    <span class="side-menu__label">Expense</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item" >
                    <i class="bx bx-archive tx-20 mr-3"></i>
                    <span class="side-menu__label">Inventory Management</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item">
                    <i class="bx bx-file-blank tx-20 mr-3"></i>
                    <span class="side-menu__label">Delivery Challan</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item">
                    <i class="bx bx-time-five tx-20 mr-3"></i>
                    <span class="side-menu__label">Warranty Tracker</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item">
                    <i class="bx bx-chat tx-20 mr-3"></i>
                    <span class="side-menu__label">Support Tool</span>
                </a>
            </li>
        </ul>
    </div>
</aside>