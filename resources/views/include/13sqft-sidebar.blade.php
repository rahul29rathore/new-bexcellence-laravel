<aside class="app-sidebar sidebar-scroll ps">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ url('/dashboard') }}">
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
                    <h4 class="font-weight-semibold mt-3 mb-0">Rahul Rathore</h4>
                    <span class="mb-0 text-muted">Sr. Full Stack Developer</span>
                </div>
            </div>
        </div>
        <ul class="side-menu open">
            <li class="side-item side-item-category">BEWARE Panel</li>
            <li class="slide">
                <a class="side-menu__item" href="{{ url('13sqft/13sqft-dashboard') }}">
                    <i class="bx bxs-dashboard tx-20 mr-3"></i>
                    <span class="side-menu__label">Dashboard</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ url('13sqft/13sqft-mdc') }}">
                    <i class="bx bx-file-blank tx-20 mr-3"></i>
                    <span class="side-menu__label">MDC</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ url('13sqft/13sqft-wcc') }}">
                    <i class="bx bx-file-find tx-20 mr-3"></i>
                    <span class="side-menu__label">WCC</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ url('13sqft/13sqft-po') }}">
                    <i class="bx bx-file tx-20 mr-3"></i>
                    <span class="side-menu__label">PO</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ url('13sqft/13sqft-delivery-challan') }}">
                    <i class="bx bx-file-blank tx-20 mr-3"></i>
                    <span class="side-menu__label">Delivery Challan</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
