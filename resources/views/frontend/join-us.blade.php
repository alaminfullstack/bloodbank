@extends('layouts.guest')
@section('title')
    Join us
@endsection

@section('content')
    <div class="content-wrapper" style="background: #e9ecef;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <div class="card mb-0">
                            <div class="card-header btn-donate text-center mb-0">
                                <div class="h5 text-info text-capitalize mb-0">Join Us below here</div>
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
                    <div class="col-6 m-auto">
                        <!-- register card form -->
                        <livewire:register />
                    </div>
                </div>

            </div><!-- /.container -->
        </div>
        <!-- /.content -->

    </div>
@endsection

