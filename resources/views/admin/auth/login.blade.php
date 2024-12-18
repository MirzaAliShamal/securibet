@extends('layouts.admin_auth')

@section('page-title', 'Login')

@section('content')
<div class="px-3">
    <div class="auth-logo-box">
        <a href="{{ route('home') }}" class="logo logo-admin">
            <img src="{{ asset('admin/assets/images/logo-sm.png') }}" height="55" alt="logo" class="auth-logo">
        </a>
    </div><!--end auth-logo-box-->

    <div class="text-center auth-logo-text">
        <h4 class="mt-0 mb-3 mt-5">Let's Get Started Securibet</h4>
        <p class="text-muted mb-0">Sign in to continue to Securibet Admin.</p>
    </div> <!--end auth-logo-text-->


    <form class="form-horizontal auth-form my-4" action="{{ route('admin.login.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Email</label>
            <div class="input-group mb-3">
                <span class="auth-form-icon">
                    <i class="dripicons-user"></i>
                </span>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div><!--end form-group-->

        <div class="form-group">
            <label for="userpassword">Password</label>
            <div class="input-group mb-3">
                <span class="auth-form-icon">
                    <i class="dripicons-lock"></i>
                </span>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" placeholder="Enter password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div><!--end form-group-->

        <div class="form-group row mt-4">
            <div class="col-sm-6">
                <div class="custom-control custom-switch switch-success">
                    <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                    <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                </div>
            </div><!--end col-->
            <div class="col-sm-6 text-right">
                <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>
            </div><!--end col-->
        </div><!--end form-group-->

        <div class="form-group mb-0 row">
            <div class="col-12 mt-2">
                <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
            </div><!--end col-->
        </div> <!--end form-group-->
    </form><!--end form-->
</div><!--end /div-->
@endsection
