<div>
    @if($displayStatus == 1)
    <div class="card" id="register">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership

            </p>

            @if (session()->has('error_message'))
                <div class="alert alert-danger">
                    {{ session('error_message') }}
                </div>
            @endif

            <form wire:submit.prevent="submit">
                <div class="input-group mb-3">
                    <input type="text" wire:model.lazy="full_name" class="form-control @error('full_name') is-invalid @enderror" placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa fa-user-alt"></span>
                        </div>
                    </div>
                    @error('full_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror


                </div>

                <div class="input-group mb-3">
                    <input type="email" wire:model.lazy="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="tel" wire:model.lazy="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <select class="form-control @error('newbloodgroup') is-invalid  @enderror" wire:model="newbloodgroup" style="width: 100%;">
                        <option>Choose blood group</option>
                        @foreach($bloodGroups as $bloodGroup)
                            <option value="{{ $bloodGroup->id }}">{{ $bloodGroup->full_name }}</option>
                        @endforeach
                    </select>

                    @error('newbloodgroup')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <select class="form-control @error('newcountry') is-invalid @enderror" wire:model="newcountry" style="width: 100%;">
                        <option>Choose Country</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('newcountry')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                @if($newcountry)
                <div class="input-group mb-3">
                    <select class="form-control @error('newstate') is-invalid @enderror"  wire:model="newstate" style="width: 100%;">
                        <option>Choose State</option>
                        @foreach($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                    @error('newstate')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                @endif

                @if($newstate)
                    <div class="input-group mb-3">
                        <select class="form-control @error('newcity') @enderror"  wire:model="newcity" style="width: 100%;">
                            <option>Choose City</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                        @error('newcity')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                @endif

                @if($newcity)
                    <div class="input-group mb-3">
                        <input type="text" wire:model.lazy="address" class="form-control @error('address') @enderror" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-map-marker-o"></span>
                            </div>
                        </div>
                        @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                @endif



                <div class="input-group mb-3">
                    <input type="password"wire:model.lazy="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>



                <div class="input-group mb-3">
                    <input type="password" wire:model.lazy="confirm_password" class="form-control @error('confirmed_password') is-invalid @enderror" placeholder="Retype password">
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
                        <button type="submit" @if($validationStatus == false) disabled @endif class="btn btn-danger btn-block">
                            <div wire:loading.remove >Register</div>
                            <div wire:loading>
                                <div class="spinner-border spinner-border-sm text-success" role="status">
                                    <span class="sr-only">Processing....</span>
                                </div>
                                Processing....
                            </div>

                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <button class="text-center p-0 btn btn-link login" wire:click="showLoginForm">I already have a membership</button>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
    @elseif($displayStatus == 2)
    <!-- forget password card form -->
        <div class="card" id="forget-password">
            <div class="card-body register-card-body">
                <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

                <form action="index.html" method="post">

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
                            <button type="submit" class="btn btn-danger btn-block">Send Password Reset Email</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <button class="p-0 btn btn-link login" wire:click="showLoginForm">Login</button>
                <button class=" btn btn-link register" wire:click="showRegisterForm">Register a new membership</button>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    @else
    <!-- login card form -->
        <div class="card" id="login">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                @if (session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session('success_message') }}
                    </div>
                @endif

                <livewire:login />


                <button class="btn btn-link p-0 forget-password" wire:click="showForgetPasswordForm">I forgot my password</button>
                <button class=" btn btn-link register" wire:click="showRegisterForm">Register a new membership</button>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    @endif
</div>

