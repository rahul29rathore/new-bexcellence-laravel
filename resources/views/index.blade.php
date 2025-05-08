@include('include.header-login')

        <div class="page">
            <div class="container-fluid">
                <div class="row no-gutter">
                    <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex login-image p-0">
                        <img src="assets/img/login-image.jpg" class="w-100" alt="logo">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                        <div class="login d-flex align-items-center py-2">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                        <div class="card-sigin">
                                            <div class="mb-5 d-flex">
                                                <a href="{{ url('/dashboard') }}"><img src="assets/img/brand/logo.png" class="sign-favicon" alt="logo"></a>
                                            </div>
                                            <div class="card-sigin">
                                                <div class="main-signup-header">
                                                    <h2>Welcome back!</h2>
                                                    <h5 class="font-weight-semibold mb-4">Please sign in to continue.</h5>
                                                    <form action="#">
                                                        <div class="form-group"> <label>Email</label> <input class="form-control" placeholder="Enter your email" type="text"> </div>
                                                        <div class="form-group"> <label>Password</label> <input class="form-control" placeholder="Enter your password" type="password"> </div>
                                                        <div class="main-signin-footer my-3">
                                                            <p><a href="javascript:void(0);">Forgot password?</a></p>
                                                        </div>
                                                        <a href="{{ url('/') }}" class="btn btn-main-primary btn-block">Sign In</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@include('include.footer-login')