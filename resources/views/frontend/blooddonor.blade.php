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
                    <h5 class="mb-0 text-info text-capitalize">Find Out Any Super Blood Donar</h5>
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
        <div class="row mt-0">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-1">
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Choose Blood Group</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                </select>
            </div>



            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-1">
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Choose Country</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-1">
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Choose State</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-1">
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Choose City</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                </select>
            </div>


        </div><!-- /.row -->
        <div class="row mt-2">
            <div class="col-md-6">
                <!-- new requested blood content -->
                <div class="card bg-gradient-light">
                    <div class="card-header border-bottom-0">
                        <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                        <small class="text-capitalize text-dark float-right">Last Active : <b>4 min
                                ago</b></small>
                    </div>
                    <!-- cardbody -->
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                                <ul class="mb-0 mt-2 ml-0 list-unstyled">
                                    <li class=""><span class="text-dark">Address : </span><small
                                            class="text-gray">Khilket , Nikonjo-2,Dhaka,
                                            Bangladesh</small></li>

                                    <li><span class="text-dark">Total Blood Donation : </span> <b
                                            class="text-gray">1 Time</b>
                                    </li>
                                    <li><span class="text-dark">Last Blood Donation : </span> <b
                                            class="text-gray">2 hour ago</b>
                                    </li>
                                    <li><span class="text-dark">Gives Blood Groups For You : </span> <b
                                            class="text-dark">A+</b>,<b class="text-dark">AB+</b>,<b
                                            class="text-dark">B+</b>
                                    </li>

                                    <li><span class="text-dark">Has Blood Available : </span> <b class="text-white-50">A+</b>,<b class="text-white-50">B+</b>
                                    </li>

                                    <li><span class="text-dark">Donar Lavel : </span><small><i class="fa fa-star fa-sm  text-maroon"></i><i class="fa fa-star text-maroon"></i><i class="fa fa-star text-maroon"></i></small>
                                    </li>

                                    <li class="small mt-1"><a href="tel:12122352"
                                            class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                            23 52</a>
                                    </li>


                                </ul>
                            </div>
                            <div class="col-5 text-center">

                                <img src="frontend/assets/img/user1-128x128.jpg" alt=""
                                    class="img-circle img-fluid float-left">
                                    <div class="progress vertical">
                                      <div class="progress-bar bg-gradient-danger" role="progressbar" style="height: 65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                <span
                                    class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                            </div>
                        </div>
                    </div>
                    <!-- cardbody -->
                    <div class="card-footer">
                        <div class="text-right">
                            <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal"
                                data-target="#modal-default">
                                <i class="fa fa-sms text-pink"></i> Request For Blood
                            </button>
                        </div>
                    </div>
                </div>
                <!-- ./ new request blood content -->
            </div>
            <div class="col-md-6">
              <!-- new requested blood content -->
              <div class="card bg-gradient-light">
                  <div class="card-header border-bottom-0">
                      <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                      <small class="text-capitalize text-dark float-right">Last Active : <b>4 min
                              ago</b></small>
                  </div>
                  <!-- cardbody -->
                  <div class="card-body pt-0">
                      <div class="row">
                          <div class="col-7">
                              <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                              <ul class="mb-0 mt-2 ml-0 list-unstyled">
                                  <li class=""><span class="text-dark">Address : </span><small
                                          class="text-gray">Khilket , Nikonjo-2,Dhaka,
                                          Bangladesh</small></li>

                                  <li><span class="text-dark">Total Blood Donation : </span> <b
                                          class="text-gray">1 Time</b>
                                  </li>
                                  <li><span class="text-dark">Last Blood Donation : </span> <b
                                          class="text-gray">2 hour ago</b>
                                  </li>
                                  <li><span class="text-dark">Gives Blood Groups For You : </span> <b
                                          class="text-dark">A+</b>,<b class="text-dark">AB+</b>,<b
                                          class="text-dark">B+</b>
                                  </li>

                                  <li><span class="text-dark">Has Blood Available : </span> <b class="text-white-50">A+</b>,<b class="text-white-50">B+</b>
                                  </li>

                                  <li><span class="text-dark">Donar Lavel : </span><small><i class="fa fa-star fa-sm  text-maroon"></i><i class="fa fa-star text-maroon"></i><i class="fa fa-star text-maroon"></i></small>
                                  </li>

                                  <li class="small mt-1"><a href="tel:12122352"
                                          class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                          23 52</a>
                                  </li>


                              </ul>
                          </div>
                          <div class="col-5 text-center">

                              <img src="frontend/assets/img/user1-128x128.jpg" alt=""
                                  class="img-circle img-fluid float-left">
                                  <div class="progress vertical">
                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="height: 65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                              <span
                                  class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                          </div>
                      </div>
                  </div>
                  <!-- cardbody -->
                  <div class="card-footer">
                      <div class="text-right">
                          <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal"
                              data-target="#modal-default">
                              <i class="fa fa-sms text-pink"></i> Request For Blood
                          </button>
                      </div>
                  </div>
              </div>
              <!-- ./ new request blood content -->
          </div>
          <div class="col-md-6">
            <!-- new requested blood content -->
            <div class="card bg-gradient-light">
                <div class="card-header border-bottom-0">
                    <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                    <small class="text-capitalize text-dark float-right">Last Active : <b>4 min
                            ago</b></small>
                </div>
                <!-- cardbody -->
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                            <ul class="mb-0 mt-2 ml-0 list-unstyled">
                                <li class=""><span class="text-dark">Address : </span><small
                                        class="text-gray">Khilket , Nikonjo-2,Dhaka,
                                        Bangladesh</small></li>

                                <li><span class="text-dark">Total Blood Donation : </span> <b
                                        class="text-gray">1 Time</b>
                                </li>
                                <li><span class="text-dark">Last Blood Donation : </span> <b
                                        class="text-gray">2 hour ago</b>
                                </li>
                                <li><span class="text-dark">Gives Blood Groups For You : </span> <b
                                        class="text-dark">A+</b>,<b class="text-dark">AB+</b>,<b
                                        class="text-dark">B+</b>
                                </li>

                                <li><span class="text-dark">Has Blood Available : </span> <b class="text-white-50">A+</b>,<b class="text-white-50">B+</b>
                                </li>

                                <li><span class="text-dark">Donar Lavel : </span><small><i class="fa fa-star fa-sm  text-maroon"></i><i class="fa fa-star text-maroon"></i><i class="fa fa-star text-maroon"></i></small>
                                </li>

                                <li class="small mt-1"><a href="tel:12122352"
                                        class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                        23 52</a>
                                </li>


                            </ul>
                        </div>
                        <div class="col-5 text-center">

                            <img src="frontend/assets/img/user1-128x128.jpg" alt=""
                                class="img-circle img-fluid float-left">
                                <div class="progress vertical">
                                  <div class="progress-bar bg-gradient-danger" role="progressbar" style="height: 65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            <span
                                class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                        </div>
                    </div>
                </div>
                <!-- cardbody -->
                <div class="card-footer">
                    <div class="text-right">
                        <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal"
                            data-target="#modal-default">
                            <i class="fa fa-sms text-pink"></i> Request For Blood
                        </button>
                    </div>
                </div>
            </div>
            <!-- ./ new request blood content -->
        </div>
        <div class="col-md-6">
          <!-- new requested blood content -->
          <div class="card bg-gradient-light">
              <div class="card-header border-bottom-0">
                  <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                  <small class="text-capitalize text-dark float-right">Last Active : <b>4 min
                          ago</b></small>
              </div>
              <!-- cardbody -->
              <div class="card-body pt-0">
                  <div class="row">
                      <div class="col-7">
                          <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                          <ul class="mb-0 mt-2 ml-0 list-unstyled">
                              <li class=""><span class="text-dark">Address : </span><small
                                      class="text-gray">Khilket , Nikonjo-2,Dhaka,
                                      Bangladesh</small></li>

                              <li><span class="text-dark">Total Blood Donation : </span> <b
                                      class="text-gray">1 Time</b>
                              </li>
                              <li><span class="text-dark">Last Blood Donation : </span> <b
                                      class="text-gray">2 hour ago</b>
                              </li>
                              <li><span class="text-dark">Gives Blood Groups For You : </span> <b
                                      class="text-dark">A+</b>,<b class="text-dark">AB+</b>,<b
                                      class="text-dark">B+</b>
                              </li>

                              <li><span class="text-dark">Has Blood Available : </span> <b class="text-white-50">A+</b>,<b class="text-white-50">B+</b>
                              </li>

                              <li><span class="text-dark">Donar Lavel : </span><small><i class="fa fa-star fa-sm  text-maroon"></i><i class="fa fa-star text-maroon"></i><i class="fa fa-star text-maroon"></i></small>
                              </li>

                              <li class="small mt-1"><a href="tel:12122352"
                                      class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                      23 52</a>
                              </li>


                          </ul>
                      </div>
                      <div class="col-5 text-center">

                          <img src="frontend/assets/img/user1-128x128.jpg" alt=""
                              class="img-circle img-fluid float-left">
                              <div class="progress vertical">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" style="height: 65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                          <span
                              class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                      </div>
                  </div>
              </div>
              <!-- cardbody -->
              <div class="card-footer">
                  <div class="text-right">
                      <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal"
                          data-target="#modal-default">
                          <i class="fa fa-sms text-pink"></i> Request For Blood
                      </button>
                  </div>
              </div>
          </div>
          <!-- ./ new request blood content -->
      </div>
        </div>

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

        <div class="row">
            <div class="col-12">
              <div class="card">
                  <div class="card-header">
                    <h5 class="mb-0 text-info text-capitalize">Argent requested blood</h5>
                  </div>
                </div>
            </div><!-- /.col -->
          </div>


          <div class="row mb-2">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-1">
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Choose Blood Group</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                </select>
            </div>



            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-1">
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Choose Country</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-1">
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Choose State</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-1">
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Choose City</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                </select>
            </div>


        </div><!-- /.row -->

          <div class="row">
            <div class="col-md-6">
              <!-- new requested blood content -->
              <div class="card bg-gradient-light">
                  <div class="card-header border-bottom-0">
                      <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                      <small class="text-capitalize text-dark float-right">Last Active : <b>4 min
                              ago</b></small>
                  </div>
                  <!-- cardbody -->
                  <div class="card-body pt-0">
                      <div class="row">
                          <div class="col-7">
                              <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                              <ul class="mb-0 mt-2 ml-0 list-unstyled">
                                  <li class=""><span class="text-dark">Address : </span><small
                                          class="text-gray">Khilket , Nikonjo-2,Dhaka,
                                          Bangladesh</small></li>

                                  <li><span class="text-dark">Total Blood Donation : </span> <b
                                          class="text-gray">1 Time</b>
                                  </li>
                                  <li><span class="text-dark">Last Blood Donation : </span> <b
                                          class="text-gray">2 hour ago</b>
                                  </li>
                                  <li><span class="text-dark">Gives Blood Groups For You : </span> <b
                                          class="text-dark">A+</b>,<b class="text-dark">AB+</b>,<b
                                          class="text-dark">B+</b>
                                  </li>

                                  <li><span class="text-dark">Has Blood Available : </span> <b class="text-white-50">A+</b>,<b class="text-white-50">B+</b>
                                  </li>

                                  <li><span class="text-dark">Donar Lavel : </span><small><i class="fa fa-star fa-sm  text-maroon"></i><i class="fa fa-star text-maroon"></i><i class="fa fa-star text-maroon"></i></small>
                                  </li>

                                  <li class="small mt-1"><a href="tel:12122352"
                                          class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                          23 52</a>
                                  </li>


                              </ul>
                          </div>
                          <div class="col-5 text-center">

                              <img src="frontend/assets/img/user1-128x128.jpg" alt=""
                                  class="img-circle img-fluid float-left">
                                  <div class="progress vertical">
                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="height: 65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                              <span
                                  class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                          </div>
                      </div>
                  </div>
                  <!-- cardbody -->
                  <div class="card-footer">
                      <div class="text-right">
                          <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal"
                              data-target="#modal-default">
                              <i class="fa fa-sms text-pink"></i> Request For Blood
                          </button>
                      </div>
                  </div>
              </div>
              <!-- ./ new request blood content -->
          </div>
          <div class="col-md-6">
            <!-- new requested blood content -->
            <div class="card bg-gradient-light">
                <div class="card-header border-bottom-0">
                    <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                    <small class="text-capitalize text-dark float-right">Last Active : <b>4 min
                            ago</b></small>
                </div>
                <!-- cardbody -->
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                            <ul class="mb-0 mt-2 ml-0 list-unstyled">
                                <li class=""><span class="text-dark">Address : </span><small
                                        class="text-gray">Khilket , Nikonjo-2,Dhaka,
                                        Bangladesh</small></li>

                                <li><span class="text-dark">Total Blood Donation : </span> <b
                                        class="text-gray">1 Time</b>
                                </li>
                                <li><span class="text-dark">Last Blood Donation : </span> <b
                                        class="text-gray">2 hour ago</b>
                                </li>
                                <li><span class="text-dark">Gives Blood Groups For You : </span> <b
                                        class="text-dark">A+</b>,<b class="text-dark">AB+</b>,<b
                                        class="text-dark">B+</b>
                                </li>

                                <li><span class="text-dark">Has Blood Available : </span> <b class="text-white-50">A+</b>,<b class="text-white-50">B+</b>
                                </li>

                                <li><span class="text-dark">Donar Lavel : </span><small><i class="fa fa-star fa-sm  text-maroon"></i><i class="fa fa-star text-maroon"></i><i class="fa fa-star text-maroon"></i></small>
                                </li>

                                <li class="small mt-1"><a href="tel:12122352"
                                        class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                        23 52</a>
                                </li>


                            </ul>
                        </div>
                        <div class="col-5 text-center">

                            <img src="frontend/assets/img/user1-128x128.jpg" alt=""
                                class="img-circle img-fluid float-left">
                                <div class="progress vertical">
                                  <div class="progress-bar bg-gradient-danger" role="progressbar" style="height: 65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            <span
                                class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                        </div>
                    </div>
                </div>
                <!-- cardbody -->
                <div class="card-footer">
                    <div class="text-right">
                        <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal"
                            data-target="#modal-default">
                            <i class="fa fa-sms text-pink"></i> Request For Blood
                        </button>
                    </div>
                </div>
            </div>
            <!-- ./ new request blood content -->
        </div>
        <div class="col-md-6">
          <!-- new requested blood content -->
          <div class="card bg-gradient-light">
              <div class="card-header border-bottom-0">
                  <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                  <small class="text-capitalize text-dark float-right">Last Active : <b>4 min
                          ago</b></small>
              </div>
              <!-- cardbody -->
              <div class="card-body pt-0">
                  <div class="row">
                      <div class="col-7">
                          <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                          <ul class="mb-0 mt-2 ml-0 list-unstyled">
                              <li class=""><span class="text-dark">Address : </span><small
                                      class="text-gray">Khilket , Nikonjo-2,Dhaka,
                                      Bangladesh</small></li>

                              <li><span class="text-dark">Total Blood Donation : </span> <b
                                      class="text-gray">1 Time</b>
                              </li>
                              <li><span class="text-dark">Last Blood Donation : </span> <b
                                      class="text-gray">2 hour ago</b>
                              </li>
                              <li><span class="text-dark">Gives Blood Groups For You : </span> <b
                                      class="text-dark">A+</b>,<b class="text-dark">AB+</b>,<b
                                      class="text-dark">B+</b>
                              </li>

                              <li><span class="text-dark">Has Blood Available : </span> <b class="text-white-50">A+</b>,<b class="text-white-50">B+</b>
                              </li>

                              <li><span class="text-dark">Donar Lavel : </span><small><i class="fa fa-star fa-sm  text-maroon"></i><i class="fa fa-star text-maroon"></i><i class="fa fa-star text-maroon"></i></small>
                              </li>

                              <li class="small mt-1"><a href="tel:12122352"
                                      class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                      23 52</a>
                              </li>


                          </ul>
                      </div>
                      <div class="col-5 text-center">

                          <img src="frontend/assets/img/user1-128x128.jpg" alt=""
                              class="img-circle img-fluid float-left">
                              <div class="progress vertical">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" style="height: 65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                          <span
                              class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                      </div>
                  </div>
              </div>
              <!-- cardbody -->
              <div class="card-footer">
                  <div class="text-right">
                      <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal"
                          data-target="#modal-default">
                          <i class="fa fa-sms text-pink"></i> Request For Blood
                      </button>
                  </div>
              </div>
          </div>
          <!-- ./ new request blood content -->
      </div>
      <div class="col-md-6">
        <!-- new requested blood content -->
        <div class="card bg-gradient-light">
            <div class="card-header border-bottom-0">
                <strong class="text-uppercase text-maroon text-left" style="letter-spacing: 2px;">a positive (+)</strong>
                <small class="text-capitalize text-dark float-right">Last Active : <b>4 min
                        ago</b></small>
            </div>
            <!-- cardbody -->
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-7">
                        <a href="#" class=""><span class="h5"><b>Nicole Pearson</b></span></a>
                        <ul class="mb-0 mt-2 ml-0 list-unstyled">
                            <li class=""><span class="text-dark">Address : </span><small
                                    class="text-gray">Khilket , Nikonjo-2,Dhaka,
                                    Bangladesh</small></li>

                            <li><span class="text-dark">Total Blood Donation : </span> <b
                                    class="text-gray">1 Time</b>
                            </li>
                            <li><span class="text-dark">Last Blood Donation : </span> <b
                                    class="text-gray">2 hour ago</b>
                            </li>
                            <li><span class="text-dark">Gives Blood Groups For You : </span> <b
                                    class="text-dark">A+</b>,<b class="text-dark">AB+</b>,<b
                                    class="text-dark">B+</b>
                            </li>

                            <li><span class="text-dark">Has Blood Available : </span> <b class="text-white-50">A+</b>,<b class="text-white-50">B+</b>
                            </li>

                            <li><span class="text-dark">Donar Lavel : </span><small><i class="fa fa-star fa-sm  text-maroon"></i><i class="fa fa-star text-maroon"></i><i class="fa fa-star text-maroon"></i></small>
                            </li>

                            <li class="small mt-1"><a href="tel:12122352"
                                    class="btn btn-sm btn-default font-weight-bold">Phone : + 800 - 12 12
                                    23 52</a>
                            </li>


                        </ul>
                    </div>
                    <div class="col-5 text-center">

                        <img src="frontend/assets/img/user1-128x128.jpg" alt=""
                            class="img-circle img-fluid float-left">
                            <div class="progress vertical">
                              <div class="progress-bar bg-gradient-danger" role="progressbar" style="height: 65%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        <span
                            class="badge position-absolute top-0 left-100 translate-middle bg-success">A</span>
                    </div>
                </div>
            </div>
            <!-- cardbody -->
            <div class="card-footer">
                <div class="text-right">
                    <button class="btn btn-sm btn-default font-weight-bold" data-toggle="modal"
                        data-target="#modal-default">
                        <i class="fa fa-sms text-pink"></i> Request For Blood
                    </button>
                </div>
            </div>
        </div>
        <!-- ./ new request blood content -->
    </div>
          </div>

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
