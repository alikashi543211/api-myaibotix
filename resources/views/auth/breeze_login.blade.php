<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Admin Login | MyAIBotix</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin-assets') }}/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin-assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin-assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin-assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="colored">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Background -->
        <div class="account-pages"></div>
        <!-- Begin page -->
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <div class="auth-logo">
                        <h3 class="text-center">
                            <a href="index.html" class="logo d-block my-4">
                                <img src="{{ asset('admin-assets') }}/images/logo-dark.png" class="logo-dark mx-auto" height="30" alt="logo-dark">
                                <img src="{{ asset('admin-assets') }}/images/logo-light.png" class="logo-light mx-auto" height="30" alt="logo-light">
                            </a>
                        </h3>
                    </div>

                    <div class="p-3">
                        <h4 class="text-muted font-size-18 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to continue to Agroxa.</p>

                        <form class="form-horizontal" action="index.html">

                            <div class="mb-3">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter username">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                            </div>

                            <div class="mb-3 row">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customControlInline">
                                        <label class="form-check-label" for="customControlInline">Remember
                                            me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-end">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-12">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your
                                        password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="text-center">
                <p class="text-white-50">Don't have an account ? <a href="{{ url('register') }}" class="text-white"> Signup Now
                    </a> </p>
                <p class="text-muted">
                    ©
                    <script>document.write(new Date().getFullYear())</script> MyAIBotix.
                </p>
            </div>

        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('admin-assets') }}/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('admin-assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('admin-assets') }}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('admin-assets') }}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('admin-assets') }}/libs/node-waves/waves.min.js"></script>
        <script src="{{ asset('admin-assets') }}/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- App js -->
        <script src="{{ asset('admin-assets') }}/js/app.js"></script>

    </body>

</html>
