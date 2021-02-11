<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Blood Bank') }}</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    @livewireStyles
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light bg-gradient-white border-bottom-0 shadow-sm">
        <div class="container">
            <a href="index3.html" class="navbar-brand">
                <img src="{{ asset('frontend') }}/assets/img/AdminLTELogo.png" alt="Blood Bank Logo" class="brand-image img-circle elevation-3"
                     style="opacity: .8">
                <!-- <span class="brand-text font-weight-light"></span> -->
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <h5 class="mb-0"><a href="{{ route('home') }}" class="nav-link">Home</a></h5>
                    </li>
                    <li class="nav-item">
                        <h5 class="mb-0"><a href="request-for-blood.html" class="nav-link">Request For Blood</a></h5>
                    </li>
                    <li class="nav-item">
                        <h5 class="mb-0"><a href="requested-blood.html" class="nav-link">Requested Blood</a></h5>
                    </li>
                    <li class="nav-item">
                        <h5 class="mb-0"><a href="blood-donar.html" class="nav-link">Blood Donar</a></h5>

                    </li>
                    <li class="nav-item">
                        <h5 class="mb-0"><a href="blog.html" class="nav-link">Blog</a></h5>

                    </li>
                </ul>
            </div>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    @auth
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="{{ asset('frontend') }}/assets/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="{{ asset('frontend') }}/assets/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="{{ asset('frontend') }}/assets/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-user-alt"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{ asset('frontend') }}/assets/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel

                                    </h3>
                                    <p class="text-sm">See Your Profile</p>

                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-cog mr-2"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-medkit mr-2"></i> Request For Blood
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-hand-holding-medical mr-2"></i> Blood Donate
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-check-square mr-2"></i> Blood Donate Agreement
                        </a>
                        <div class="dropdown-divider"></div>
                        <livewire:logout />
                    </div>
                    </li>
                    @endauth
                        @guest
                            <li class="nav-item">
                               <h5><a class="nav-link" href="{{ route('join_us') }}">
                                    <i class="fas fa-user-plus"></i>
                                     Join Us
                                </a>
                               </h5>
                            </li>
                        @endguest
            </ul>
        </div>
    </nav>
    <!-- /.navbar -->
    <!-- Content Wrapper. Contains page content -->
   @yield('content')
   <!-- /.content-wrapper -->


    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-dark">
                <div class="modal-header ">
                    <h4 class="modal-title text-indigo">Donate To Md Gem</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center">Do you want to donate <b class="text-maroon">A Positive</b> Blood For
                        <b class="text-purple">MD Gem?</b> in the area <b class="text-gray">Khilket Dhaka bangaldesh</b>
                    </h4>
                    <!-- register card form -->
                    <div class="card d-none" id="register">
                        <div class="card-body register-card-body ">
                            <p class="login-box-msg">Register a new membership</p>

                            <form action="../../index.html" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Full name">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-texte">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Retype password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="icheck-primary">
                                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                            <label for="agreeTerms" class="text-gray">
                                                I agree to the <a href="#">terms</a>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-4">
                                        <button type="submit" class="btn bg-maroon btn-block">Register</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>


                            <button class="text-center btn btn-link login">I already have a membership</button>
                        </div>
                        <!-- /.form-box -->
                    </div><!-- /.card -->
                    <!-- login card form -->
                    <div class="card" id="login">
                        <div class="card-body register-card-body bg-dropdown">
                            <p class="login-box-msg text-gray">Sign in to start your session</p>

                            <form action="../../index.html" method="post">

                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="icheck-primary">
                                            <input type="checkbox" id="remember" name="remember" value="agree">
                                            <label for="remember" class="text-gray">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-4">
                                        <button type="submit" class="btn bg-maroon btn-block">Login</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>


                            <button class="btn btn-link forget-password">I forgot my password</button>
                            <button class=" btn btn-link register">Register a new membership</button>
                        </div>
                        <!-- /.form-box -->
                    </div><!-- /.card -->

                    <!-- forget password card form -->
                    <div class="card d-none" id="forget-password">
                        <div class="card-body register-card-body">
                            <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new
                                password.
                            </p>

                            <form action="../../index.html" method="post">

                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- /.col -->
                                    <div class="col-12">
                                        <button type="submit" class="btn bg-maroon btn-block">Send Password Reset Email</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>

                            <button class=" btn btn-link login">Login</button>
                            <button class=" btn btn-link register">Register a new membership</button>
                        </div>
                        <!-- /.form-box -->
                    </div><!-- /.card -->
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->



    <!-- Main Footer -->
    <footer class="main-footer bg-gradient-gray border-top-0 p-0">
        <div class="container-fluid bg-gradient-gray border-buttom-0">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.html" class="navbar-brand ml-3 mb-0">
                        <img src="{{ asset('frontend') }}/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image  img-circle img-size-50 elevation-3"
                             style="opacity: .8;height: 20px;">
                        <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <a href="" class="btn btn-link text-lime">Gent Instant Support in your area</a>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-gradient-gray">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card-header border-bottom-0">
                        <h4 class="m-0">Contact Us</h4>
                        <ul class="mb-0 mt-2 ml-0 list-unstyled">
                            <li class="text-white">Khilket , Nikonjo-2</li>
                            <li class="text-white">Dhaka 1207</li>
                            <li class="text-white">Bangladesh</li>
                            <li class="text-white"><b>Hotline : </b>+88018123456789</li>
                            <li class="text-white"><b>E-mail :  </b>abb@gmail.com</li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card-header border-bottom-0">
                        <h4 class="m-0">Donation</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur ariam molestias nt recusandae pariatur deserunt cupiditate id maxime ut atque adipisci?</p>

                        <img src="{{ asset('frontend') }}/assets/img/credit/visa.png" alt="Visa">
                        <img src="{{ asset('frontend') }}/assets/img/credit/mastercard.png" alt="Mastercard">
                        <img src="{{ asset('frontend') }}/assets/img/credit/american-express.png" alt="American Express">
                        <img src="{{ asset('frontend') }}/assets/img/credit/paypal2.png" alt="Paypal">

                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card-header border-bottom-0">
                        <h4 class="m-0">Feedback</h4>
                        <form class="search-form">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Write Your feedback here">

                                <div class="input-group-append">
                                    <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.input-group -->
                        </form>
                    </div>
                    <div class="card-header border-bottom-0">
                        <h4 class="m-0">Repoarts</h4>
                        <form class="search-form">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Write your report here">

                                <div class="input-group-append">
                                    <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.input-group -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- To the right -->
        <div class="float-right py-3 mr-4 d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <div class="py-3 ml-4">
            <strong class="">Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.

        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- jQuery -->
<script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/sweetalert2.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/toastr.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('frontend') }}/assets/js/adminlte.min.js"></script>
<script>

</script>


@livewireScripts

@stack('js')
</body>
</html>
