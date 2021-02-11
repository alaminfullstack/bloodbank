@extends('layouts.guest')
@section('title')
    Home
@endsection

@section('content')

    <div class="content-wrapper" style="background: #e9ecef;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="mb-0 mt-0 text-dark text-center font-weight-bold">Welcome our aid Blood Bank </h1>
                        <h6 class="text-center text-gray mt-2">You can search your required blood by choosing blood group</h6>
                    </div><!-- /.col -->
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <!-- .col-md-4 col-lg-3 col-sm-6 -->
                    <div class="col-md-4 col-xl-3 col-sm-6">
                        <div class="card text-center bg-dropdown">
                            <div class="card-header">
                                <a href="#">
                                    <h4 class="text-uppercase mb-0">a positive (+)</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-4 col-lg-3 col-sm-6 -->
                    <!-- .col-md-4 col-lg-3 col-sm-6 -->
                    <div class="col-md-4 col-xl-3 col-sm-6">
                        <div class="card text-center bg-dropdown">
                            <div class="card-header">
                                <a href="#">
                                    <h4 class="text-uppercase mb-0">a negative (-)</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-4 col-lg-3 col-sm-6 -->
                    <!-- .col-md-4 col-lg-3 col-sm-6 -->
                    <div class="col-md-4 col-xl-3 col-sm-6">
                        <div class="card text-center bg-dropdown">
                            <div class="card-header">
                                <a href="#">
                                    <h4 class="text-uppercase mb-0">b positive (+)</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-4 col-lg-3 col-sm-6 -->
                    <!-- .col-md-4 col-lg-3 col-sm-6 -->
                    <div class="col-md-4 col-xl-3 col-sm-6">
                        <div class="card text-center bg-dropdown">
                            <div class="card-header">
                                <a href="#">
                                    <h4 class="text-uppercase mb-0">b negative (-)</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-4 col-lg-3 col-sm-6 -->
                    <!-- .col-md-4 col-lg-3 col-sm-6 -->
                    <div class="col-md-4 col-xl-3 col-sm-6">
                        <div class="card text-center bg-dropdown">
                            <div class="card-header">
                                <a href="#">
                                    <h4 class="text-uppercase mb-0">o positive (+)</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-4 col-lg-3 col-sm-6 -->
                    <!-- .col-md-4 col-lg-3 col-sm-6 -->
                    <div class="col-md-4 col-xl-3 col-sm-6">
                        <div class="card text-center bg-dropdown">
                            <div class="card-header">
                                <a href="#" >
                                    <h4 class="text-uppercase mb-0">o negative (-)</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-4 col-lg-3 col-sm-6 -->
                    <!-- .col-md-4 col-lg-3 col-sm-6 -->
                    <div class="col-md-4 col-xl-3 col-sm-6">
                        <div class="card text-center bg-dropdown">
                            <div class="card-header">
                                <a href="#">
                                    <h4 class="text-uppercase mb-0">ab positive (+)</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-4 col-lg-3 col-sm-6 -->
                    <!-- .col-md-4 col-lg-3 col-sm-6 -->
                    <div class="col-md-4 col-xl-3 col-sm-6">
                        <div class="card text-center bg-dropdown">
                            <div class="card-header">
                                <a href="#">
                                    <h4 class="text-uppercase mb-0">ab negative (-)</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-4 col-lg-3 col-sm-6 -->

                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card header">
                            <div class="card-header">
                                <h5 class="mb-0 text-capitalize text-dark">We are the connector with the blood Donor and the patient</h5>
                                <p class="text-gray mt-2 lead"><small>We have upcoming lot of user who will donate the blood and can take blood when they will need. In any circumstance you can collect blood from us. We have a dedicated team to help you.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card btn-donate">
                            <div class="card-header">
                                <h5 class="mb-0 text-info text-capitalize">New requested blood</h5>
                            </div>
                        </div>

                        <!-- new requested blood content -->
                        <div class="card bg-gradient-light">
                            <div class="card-header border-bottom-0">
                                <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                                <small class="text-capitalize text-gray float-right">Requested On : <b>4 min ago</b></small>
                            </div>
                            <!-- cardbody -->
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                                        <ul class="mb-0 mt-2 ml-0 list-unstyled">
                                            <li class=""><span class="text-dark font-weight-20">Address : </span><small class="text-dark">Khilket , Nikonjo-2,Dhaka, Bangladesh</small></li>

                                            <li><span class="text-dark font-weight-20">Want to Donate : </span> <b class="text-gray">1
                                                    Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Agreement With Donar : </span> <b
                                                    class="text-gray">1 Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Groups That Can Donte : </span> <b
                                                    class="text-gray">A+</b>,<b class="text-gray">AB+</b>,<b
                                                    class="text-gray">B+</b>
                                            </li>

                                            <li class="small mt-1"><a href="tel:12122352" class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                                    23 52</a>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('frontend') }}/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
                                        <span class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                                    </div>
                                </div>
                            </div>
                            <!-- cardbody -->
                            <div class="card-footer">
                                <div class="text-right">
                                    <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-comments text-pink"></i> I want to blood donate
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- ./ new request blood content -->
                        <!-- new requested blood content -->
                        <div class="card bg-gradient-light">
                            <div class="card-header border-bottom-0">
                                <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                                <small class="text-capitalize text-gray float-right">Requested On : <b>4 min ago</b></small>
                            </div>
                            <!-- cardbody -->
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                                        <ul class="mb-0 mt-2 ml-0 list-unstyled">
                                            <li class=""><span class="text-dark font-weight-20">Address : </span><small class="text-dark">Khilket , Nikonjo-2,Dhaka, Bangladesh</small></li>

                                            <li><span class="text-dark font-weight-20">Want to Donate : </span> <b class="text-gray">1
                                                    Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Agreement With Donar : </span> <b
                                                    class="text-gray">1 Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Groups That Can Donte : </span> <b
                                                    class="text-gray">A+</b>,<b class="text-gray">AB+</b>,<b
                                                    class="text-gray">B+</b>
                                            </li>

                                            <li class="small mt-1"><a href="tel:12122352" class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                                    23 52</a>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('frontend') }}/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
                                        <span class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                                    </div>
                                </div>
                            </div>
                            <!-- cardbody -->
                            <div class="card-footer">
                                <div class="text-right">
                                    <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-comments text-pink"></i> I want to blood donate
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- ./ new request blood content -->
                        <!-- new requested blood content -->
                        <div class="card bg-gradient-light">
                            <div class="card-header border-bottom-0">
                                <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                                <small class="text-capitalize text-gray float-right">Requested On : <b>4 min ago</b></small>
                            </div>
                            <!-- cardbody -->
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                                        <ul class="mb-0 mt-2 ml-0 list-unstyled">
                                            <li class=""><span class="text-dark font-weight-20">Address : </span><small class="text-dark">Khilket , Nikonjo-2,Dhaka, Bangladesh</small></li>

                                            <li><span class="text-dark font-weight-20">Want to Donate : </span> <b class="text-gray">1
                                                    Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Agreement With Donar : </span> <b
                                                    class="text-gray">1 Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Groups That Can Donte : </span> <b
                                                    class="text-gray">A+</b>,<b class="text-gray">AB+</b>,<b
                                                    class="text-gray">B+</b>
                                            </li>

                                            <li class="small mt-1"><a href="tel:12122352" class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                                    23 52</a>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('frontend') }}/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
                                        <span class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                                    </div>
                                </div>
                            </div>
                            <!-- cardbody -->
                            <div class="card-footer">
                                <div class="text-right">
                                    <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-comments text-pink"></i> I want to blood donate
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- ./ new request blood content -->
                        <!-- new requested blood content -->
                        <div class="card bg-gradient-light">
                            <div class="card-header border-bottom-0">
                                <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                                <small class="text-capitalize text-gray float-right">Requested On : <b>4 min ago</b></small>
                            </div>
                            <!-- cardbody -->
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                                        <ul class="mb-0 mt-2 ml-0 list-unstyled">
                                            <li class=""><span class="text-dark font-weight-20">Address : </span><small class="text-dark">Khilket , Nikonjo-2,Dhaka, Bangladesh</small></li>

                                            <li><span class="text-dark font-weight-20">Want to Donate : </span> <b class="text-gray">1
                                                    Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Agreement With Donar : </span> <b
                                                    class="text-gray">1 Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Groups That Can Donte : </span> <b
                                                    class="text-gray">A+</b>,<b class="text-gray">AB+</b>,<b
                                                    class="text-gray">B+</b>
                                            </li>

                                            <li class="small mt-1"><a href="tel:12122352" class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                                    23 52</a>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('frontend') }}/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
                                        <span class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                                    </div>
                                </div>
                            </div>
                            <!-- cardbody -->
                            <div class="card-footer">
                                <div class="text-right">
                                    <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-comments text-pink"></i> I want to blood donate
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- ./ new request blood content -->

                        <!-- ./ new request blood content -->
                        <!-- more argent requested blood content -->
                        <a href="" class="btn btn-sm btn-default tex-center">View All New Requested Blood</a>

                        <!-- more argent requested blood content -->
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-dropdown">
                            <div class="card-header">
                                <h5 class="mb-0 text-info text-capitalize">Argent requested blood</h5>
                            </div>
                        </div>

                        <!-- new requested blood content -->
                        <div class="card bg-gradient-light">
                            <div class="card-header border-bottom-0">
                                <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                                <small class="text-capitalize text-gray float-right">Requested On : <b>4 min ago</b></small>
                            </div>
                            <!-- cardbody -->
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                                        <ul class="mb-0 mt-2 ml-0 list-unstyled">
                                            <li class=""><span class="text-dark font-weight-20">Address : </span><small class="text-dark">Khilket , Nikonjo-2,Dhaka, Bangladesh</small></li>

                                            <li><span class="text-dark font-weight-20">Want to Donate : </span> <b class="text-gray">1
                                                    Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Agreement With Donar : </span> <b
                                                    class="text-gray">1 Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Groups That Can Donte : </span> <b
                                                    class="text-gray">A+</b>,<b class="text-gray">AB+</b>,<b
                                                    class="text-gray">B+</b>
                                            </li>

                                            <li class="small mt-1"><a href="tel:12122352" class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                                    23 52</a>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('frontend') }}/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
                                        <span class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                                    </div>
                                </div>
                            </div>
                            <!-- cardbody -->
                            <div class="card-footer">
                                <div class="text-right">
                                    <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-comments text-pink"></i> I want to blood donate
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- ./ new request blood content -->
                        <!-- new requested blood content -->
                        <div class="card bg-gradient-light">
                            <div class="card-header border-bottom-0">
                                <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                                <small class="text-capitalize text-gray float-right">Requested On : <b>4 min ago</b></small>
                            </div>
                            <!-- cardbody -->
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                                        <ul class="mb-0 mt-2 ml-0 list-unstyled">
                                            <li class=""><span class="text-dark font-weight-20">Address : </span><small class="text-dark">Khilket , Nikonjo-2,Dhaka, Bangladesh</small></li>

                                            <li><span class="text-dark font-weight-20">Want to Donate : </span> <b class="text-gray">1
                                                    Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Agreement With Donar : </span> <b
                                                    class="text-gray">1 Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Groups That Can Donte : </span> <b
                                                    class="text-gray">A+</b>,<b class="text-gray">AB+</b>,<b
                                                    class="text-gray">B+</b>
                                            </li>

                                            <li class="small mt-1"><a href="tel:12122352" class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                                    23 52</a>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('frontend') }}/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
                                        <span class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                                    </div>
                                </div>
                            </div>
                            <!-- cardbody -->
                            <div class="card-footer">
                                <div class="text-right">
                                    <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-comments text-pink"></i> I want to blood donate
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- ./ new request blood content -->
                        <!-- new requested blood content -->
                        <div class="card bg-gradient-light">
                            <div class="card-header border-bottom-0">
                                <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                                <small class="text-capitalize text-gray float-right">Requested On : <b>4 min ago</b></small>
                            </div>
                            <!-- cardbody -->
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                                        <ul class="mb-0 mt-2 ml-0 list-unstyled">
                                            <li class=""><span class="text-dark font-weight-20">Address : </span><small class="text-dark">Khilket , Nikonjo-2,Dhaka, Bangladesh</small></li>

                                            <li><span class="text-dark font-weight-20">Want to Donate : </span> <b class="text-gray">1
                                                    Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Agreement With Donar : </span> <b
                                                    class="text-gray">1 Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Groups That Can Donte : </span> <b
                                                    class="text-gray">A+</b>,<b class="text-gray">AB+</b>,<b
                                                    class="text-gray">B+</b>
                                            </li>

                                            <li class="small mt-1"><a href="tel:12122352" class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                                    23 52</a>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('frontend') }}/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
                                        <span class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                                    </div>
                                </div>
                            </div>
                            <!-- cardbody -->
                            <div class="card-footer">
                                <div class="text-right">
                                    <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-comments text-pink"></i> I want to blood donate
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- ./ new request blood content -->
                        <!-- new requested blood content -->
                        <div class="card bg-gradient-light">
                            <div class="card-header border-bottom-0">
                                <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                                <small class="text-capitalize text-gray float-right">Requested On : <b>4 min ago</b></small>
                            </div>
                            <!-- cardbody -->
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                                        <ul class="mb-0 mt-2 ml-0 list-unstyled">
                                            <li class=""><span class="text-dark font-weight-20">Address : </span><small class="text-dark">Khilket , Nikonjo-2,Dhaka, Bangladesh</small></li>

                                            <li><span class="text-dark font-weight-20">Want to Donate : </span> <b class="text-gray">1
                                                    Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Agreement With Donar : </span> <b
                                                    class="text-gray">1 Donar</b>
                                            </li>
                                            <li><span class="text-dark font-weight-20">Groups That Can Donte : </span> <b
                                                    class="text-gray">A+</b>,<b class="text-gray">AB+</b>,<b
                                                    class="text-gray">B+</b>
                                            </li>

                                            <li class="small mt-1"><a href="tel:12122352" class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                                    23 52</a>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('frontend') }}/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
                                        <span class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                                    </div>
                                </div>
                            </div>
                            <!-- cardbody -->
                            <div class="card-footer">
                                <div class="text-right">
                                    <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-comments text-pink"></i> I want to blood donate
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- ./ new request blood content -->

                        <!-- ./ argent requested blood content -->
                        <!-- more argent requested blood content -->
                        <a href="" class="btn btn-sm btn-default tex-center">View All New Requested Blood</a>

                        <!-- more argent requested blood content -->
                    </div>

                </div>
                <!-- /.row -->
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card-header mb-0 bg-gradient-light rounded shadow-sm">
                            <div class="h5 text-info text-capitalize mb-0 float-left">find out your requirement informations below here</div>
                            <a hredf="" class="float-right btn btn-sm btn-default">View All</a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row mt-3">
                    <div class="col-sm-6 col-md-4">
                        <div class="card bg-gradient-light">
                            <div class="card-booy p-2">
                                <div class="h-50">
                                    <img src="{{ asset('frontend') }}/assets/img/photo1.png" alt="title" class="card-img-top img-fluid">
                                </div>
                                <a href="" class="text-maroon">
                                    <h1 class="mb-0 pt-1 h4">Information Title Here</h1>
                                </a>
                                <p class="lead mt-1  text-justify text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit......</p>
                                <a href="#" class="btn btn-sm bg-gradient-pink ">Read more</a>
                            </div>
                            <div class="card-footer pl-2 ml-0 text-gray">
                                <span>Published On : <b>4 min ago</b></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card bg-gradient-light">
                            <div class="card-booy p-2">
                                <div class="h-50">
                                    <img src="{{ asset('frontend') }}/assets/img/photo1.png" alt="title" class="card-img-top img-fluid">
                                </div>
                                <a href="" class="text-maroon">
                                    <h1 class="mb-0 pt-1 h4">Information Title Here</h1>
                                </a>
                                <p class="lead mt-1  text-justify text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit......</p>
                                <a href="#" class="btn btn-sm bg-gradient-pink ">Read more</a>
                            </div>
                            <div class="card-footer pl-2 ml-0 text-gray">
                                <span>Published On : <b>4 min ago</b></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card bg-gradient-light">
                            <div class="card-booy p-2">
                                <div class="h-50">
                                    <img src="{{ asset('frontend') }}/assets/img/photo1.png" alt="title" class="card-img-top img-fluid">
                                </div>
                                <a href="" class="text-maroon">
                                    <h1 class="mb-0 pt-1 h4">Information Title Here</h1>
                                </a>
                                <p class="lead mt-1  text-justify text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit......</p>
                                <a href="#" class="btn btn-sm bg-gradient-pink ">Read more</a>
                            </div>
                            <div class="card-footer pl-2 ml-0 text-gray">
                                <span>Published On : <b>4 min ago</b></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card bg-gradient-light">
                            <div class="card-booy p-2">
                                <div class="h-50">
                                    <img src="{{ asset('frontend') }}/assets/img/photo1.png" alt="title" class="card-img-top img-fluid">
                                </div>
                                <a href="" class="text-maroon">
                                    <h1 class="mb-0 pt-1 h4">Information Title Here</h1>
                                </a>
                                <p class="lead mt-1  text-justify text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit......</p>
                                <a href="#" class="btn btn-sm bg-gradient-pink ">Read more</a>
                            </div>
                            <div class="card-footer pl-2 ml-0 text-gray">
                                <span>Published On : <b>4 min ago</b></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card bg-gradient-light">
                            <div class="card-booy p-2">
                                <div class="h-50">
                                    <img src="{{ asset('frontend') }}/assets/img/photo1.png" alt="title" class="card-img-top img-fluid">
                                </div>
                                <a href="" class="text-maroon">
                                    <h1 class="mb-0 pt-1 h4">Information Title Here</h1>
                                </a>
                                <p class="lead mt-1  text-justify text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit......</p>
                                <a href="#" class="btn btn-sm bg-gradient-pink ">Read more</a>
                            </div>
                            <div class="card-footer pl-2 ml-0 text-gray">
                                <span>Published On : <b>4 min ago</b></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card bg-gradient-light">
                            <div class="card-booy p-2">
                                <div class="h-50">
                                    <img src="{{ asset('frontend') }}/assets/img/photo1.png" alt="title" class="card-img-top img-fluid">
                                </div>
                                <a href="" class="text-maroon">
                                    <h1 class="mb-0 pt-1 h4">Information Title Here</h1>
                                </a>
                                <p class="lead mt-1  text-justify text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit......</p>
                                <a href="#" class="btn btn-sm bg-gradient-pink ">Read more</a>
                            </div>
                            <div class="card-footer pl-2 ml-0 text-gray">
                                <span>Published On : <b>4 min ago</b></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!-- /.content -->

    </div>

@endsection
