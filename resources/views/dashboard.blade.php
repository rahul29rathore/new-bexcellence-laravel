@include('include.header')
<style>
    aside,
    .main-header {
        display: none;
    }

    .main-content {
        margin: 0
    }

    .main-footer .container-fluid {
        padding: 0
    }

    body {
        background: center/100% 100% no-repeat url("assets/img/tech-bg.png")
    }
</style>
<div class="container-fluid">
    <dov class="row pt-5">
        <div class="col-lg-12 text-center mb-5">
            <img src="assets/img/brand/logo.png" alt="logo" class="mb-4">
            <h1 class="font-weight-bold">WELCOME BACK, <span class="text-danger">RAHUL</span></h1>
            <h5>How would you like to proceed with?</h5>
        </div>
        <div class="col-lg-6 col-md-12 mx-auto">
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="card p-3">
                        <div class="card-body px-0">
                            <div class="row">
                                <a href="{{ url('/13sqft/13sqft-dashboard') }}"
                                    class="col text-center panel-card text-dark">
                                    <img src="assets/img/brand/13sqft-logo.png" alt="logo" class="mb-4">
                                    <h4>LOGIN TO <span class="text-danger">13SQFT</span></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span class="btn btn-link text-danger">Redirect to Panel <i
                                            class="bx bx-link-external"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mx-auto">
                    <div class="card p-3">
                        <div class="card-body px-0">
                            <div class="row">
                                <a href="{{ url('bmi-dashboard') }}" class="col text-center panel-card text-dark">
                                    <img src="assets/img/brand/bmi-logo.png" alt="logo" width="80"
                                        class="mb-4">
                                    <h4>LOGIN TO <span class="text-danger">BUILDMYINFRA</span></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span class="btn btn-link text-danger">Redirect to Panel <i
                                            class="bx bx-link-external"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mx-auto">
                    <div class="card p-3">
                        <div class="card-body px-0">
                            <div class="row">
                                <a href="{{ url('beware/beware-dashboard') }}"
                                    class="col text-center panel-card text-dark">
                                    <img src="assets/img/brand/beware-logo.png" alt="logo" class="mb-4">
                                    <h4>LOGIN TO <span class="text-danger">BEWARE</span></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span class="btn btn-link text-danger">Redirect to Panel <i
                                            class="bx bx-link-external"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-5">
            <p class="text-center"><a href="#" class="text-danger"><i class="bx bx-log-out"></i> Sign Out</a> from
                the system.</p>
        </div>
    </dov>
</div>
@include('include.footer')
