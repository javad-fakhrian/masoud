{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}

















<!doctype html>
<html lang="en">


<!-- Mirrored from paradigm-shift.ir/Brego/brego/light/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:40:31 GMT -->
<head>
<title>مسعود عسگری | ثبت نام</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Brego Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.png" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="Admin_dist/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="Admin_dist/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="Admin_dist/assets/vendor/animate-css/vivify.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="Admin_dist/light/assets/css/site.min.css">

</head>

<body class="theme-blush">

    <div class="auth-main particles_js">
        <div class="auth_div vivify popIn">
            {{-- <div class="auth_brand">
                <a class="navbar-brand" href="#"><img src="Admin_dist/assets/images/icon.svg" width="30" height="30" class="d-inline-block align-top mr-2" alt="">برگو</a>                                                
            </div> --}}
            <div class="card">
                <div class="pattern">
                    <span class="red"></span>
                    <span class="indigo"></span>
                    <span class="blue"></span>
                    <span class="green"></span>
                    <span class="orange"></span>
                </div>
                <div class="header">
                    <p class="lead">ایجاد یک حساب کاربری</p>
                </div>
                <div class="body">
                    <form class="form-auth-small" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control round" placeholder="نام شما" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control round" placeholder="ایمیل شما" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">                            
                            <input type="password" class="form-control round" placeholder="رمزعبور" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">                            
                            <input class="form-control round" placeholder="تکرار رمز عبور" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                            
                        </div>
                        <button type="submit" class="btn btn-primary btn-round btn-block">ثبت نام</button>                                
                    </form>
                    
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
    <!-- END WRAPPER -->

<script src="Admin_dist/assets/bundles/libscripts.bundle.js"></script>    
<script src="Admin_dist/assets/bundles/vendorscripts.bundle.js"></script>

<script src="Admin_dist/assets/vendor/particlesjs/particles.min.js"></script><script src="Admin_dist/assets/bundles/mainscripts.bundle.js"></script><script src="Admin_dist/assets/js/pages/particlesjs.js"></script>
</body>