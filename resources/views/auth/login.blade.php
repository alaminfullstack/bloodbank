
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blood Bank | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="frontend/assets/font-awesome/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="frontend/assets/css/select2.min.css">
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="frontend/assets/css/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="frontend/assets/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{url('/')}}"><b>Blood</b>Bank</a>
    </div>

    <!-- register card form -->
    <div class="card d-none" id="register">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Full name" :value="old('name')" required autofocus autocomplete="name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa fa-user-alt"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" :value="old('email')" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone" :value="old('phone')" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <select class="form-control select2" name="blood_group_id" id="blood_group_id" style="width: 100%;" required>
                        <option>Choose blood group</option>
                        <option>A positive (+)</option>
                        <option>B positive (+)</option>
                    </select>

                </div>
                <div class="input-group mb-3">
                    <select class="form-control select2" name="country" id="name" style="width: 100%;" required>
                        <option>Choose Country</option>
                        <option>Bangladesh</option>
                        <option>Pakistan</option>
                    </select>

                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete="new-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Retype password" required autocomplete="new-password">
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
                        <button type="submit"  class="btn btn-danger btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <button class="text-center p-0 btn btn-link login">I already have a membership</button>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->

    <!-- login card form -->
    <div class="card" id="login">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

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
                    <div class="input-group-append content">
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


            <button class="btn p-0 btn-link forget-password">I forgot my password</button>
            <button class=" btn p-0 btn-link register">Register a new membership</button>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->

    <!-- forget password card form -->
    <div class="card d-none" id="forget-password">
        <div class="card-body register-card-body">
            <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

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

            <button class=" btn p-0 btn-link login">Login</button>
            <button class=" btn btn-link register">Register a new membership</button>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="frontend/assets/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="frontend/assets/js/bootstrap.bundle.min.js"></script>
<script src="frontend/assets/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="frontend/assets/js/adminlte.min.js"></script>
<script>
    $('.select2').select2()
</script>
<script>
    $('.login').click(function(){
        $('#register').addClass('d-none');
        $('#forget-password').addClass('d-none');
        $('#login').removeClass('d-none');
    });

    $('.register').click(function () {
        $('#login').addClass('d-none');
        $('#forget-password').addClass('d-none');
        $('#register').removeClass('d-none');
    });

    $('.forget-password').click(function () {
        $('#login').addClass('d-none');
        $('#register').addClass('d-none');
        $('#forget-password').removeClass('d-none');
    });
</script>
</body>
</html>

    {{-- <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Login') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout> --}}


