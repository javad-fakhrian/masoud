{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}











<!doctype html>
<html lang="en">


<!-- Mirrored from paradigm-shift.ir/Brego/brego/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:39:47 GMT -->
<head>
<title>مسعود عسگری | ورود</title>
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
                    <p class="lead">وارد حساب کاربری خود شوید</p>
                </div>
                <div class="body">
                    <form class="form-auth-small" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">ایمیل</label>
                            <input type="email" class="form-control round" id="signin-email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ایمیل">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">رمزعبور</label>
                            <input type="password" class="form-control round" id="signin-password" name="password" required autocomplete="current-password" placeholder="رمزعبور">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group clearfix">
                            <label class="fancy-checkbox element-left">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span>مرا به خاطر بسپار</span>
                            </label>								
                        </div>
                        <button type="submit" class="btn btn-primary btn-round btn-block">ورود</button>
                        <div class="bottom">
                            <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{ route('password.request') }}">رمز عبور را فراموش کرده اید؟</a></span>
                            <span>حساب کاربری ندارید؟ <a href="{{ route('register') }}">ثبت نام</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
    <!-- END WRAPPER -->
    
<script src="Admin_dist/light/assets/bundles/libscripts.bundle.js"></script>    
<script src="Admin_dist/light/assets/bundles/vendorscripts.bundle.js"></script>

<script src="Admin_dist/assets/vendor/particlesjs/particles.min.js"></script><script src="Admin_dist/light/assets/bundles/mainscripts.bundle.js"></script><script src="Admin_dist/light/assets/js/pages/particlesjs.js"></script>
</body>

<!-- Mirrored from paradigm-shift.ir/Brego/brego/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:39:47 GMT -->
</html>

