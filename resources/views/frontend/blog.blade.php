@extends('frontend.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: #e9ecef;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card mb-0">
                <div class="card-header">
                    <h5 class="mb-0 text-info text-capitalize">Find Out Any Information Of Your Requirtment</h5>
                </div>
            </div>
          </div><!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6 col-xl-6 mb-1">
              <form class="search-form">
                <div class="input-group">
                  <input type="text" name="search" class="form-control" autofocus
                    placeholder="Real time Search here">

                  <div class="input-group-append">
                    <button type="submit" name="submit" class="btn btn-default"><i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
                <!-- /.input-group -->
              </form>
            </div><!-- /.col -->



            <div class="col-12 col-sm-6 col-lg-6 col-xl-6 mb-1">
              <select class="form-control select2" style="width: 100%;">
                <option selected="selected">Latest Post</option>
                <option>Top Viewer Post</option>
                <option>Popular Post</option>
              </select>
            </div>



          </div><!-- /.row -->
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
        <div class="row">
            <div class="col-12">
                <div class="card-tools">
                    <ul class="pagination pagination-sm">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                        <li class="page-item"><a class="page-link" href="#">11</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
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
