<div>

    <form wire:submit.prevent="submit">
        @csrf
        <div class="input-group mb-3">
            <input type="email" wire:model.lazy="form.email" class="form-control @error('form.email') is-invalid @enderror" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('form.email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input type="password" wire:model.lazy="form.password" class="form-control @error('form.password') is-invalid @enderror" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('form.password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
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
                <button type="submit" @if($status == false) disabled  @endif class="btn btn-danger btn-block">
                    <div wire:loading.remove >Login</div>
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

    @if (session()->has('error_message'))
            <script>
                $(function() {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'middle-center',
                        showConfirmButton: false,
                        timer: 3000
                    });
                    Toast.fire({
                        icon: 'error',
                        title: '{{ session('error_message') }}'
                    });
                });

            </script>
    @endif

    @if (session()->has('success_message'))
        <script>
            $(function() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'middle-center',
                    showConfirmButton: false,
                    timer: 5000
                });
                Toast.fire({
                    icon: 'success',
                    title: '{{ session('success_message') }}'
                });
            });

        </script>
    @endif
</div>
