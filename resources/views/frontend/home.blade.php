@extends('frontend.master')
@section('title')
    Home Page
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
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
            @foreach($bloodGroups as  $bloodGroup)
                <div class="col-md-4 col-xl-3 col-sm-6">
            <div class="card text-center bg-dropdown">
              <div class="card-header">
                <a href="#">
                  <h4 class="text-uppercase mb-0">{{ $bloodGroup->full_name }}</h4>
                </a>
              </div>
            </div>
          </div>
            @endforeach
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
                <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;"></strong>
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
                    <img src="frontend/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
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
                    <img src="frontend/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
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
                    <img src="frontend/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
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
                    <img src="frontend/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
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
                  <img src="frontend/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
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
                  <img src="frontend/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
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
                  <img src="frontend/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
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
                  <img src="frontend/assets/img/user1-128x128.jpg" alt="" class="img-circle img-fluid position-relative">
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
                  <img src="frontend/assets/img/photo1.png" alt="title" class="card-img-top img-fluid">
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
                  <img src="frontend/assets/img/photo1.png" alt="title" class="card-img-top img-fluid">
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
                  <img src="frontend/assets/img/photo1.png" alt="title" class="card-img-top img-fluid">
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
                  <img src="frontend/assets/img/photo1.png" alt="title" class="card-img-top img-fluid">
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
                  <img src="frontend/assets/img/photo1.png" alt="title" class="card-img-top img-fluid">
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
                  <img src="frontend/assets/img/photo1.png" alt="title" class="card-img-top img-fluid">
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
@endsection
