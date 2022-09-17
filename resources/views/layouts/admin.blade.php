<!doctype html>
<html lang="fa">


<!-- Mirrored from paradigm-shift.ir/Brego/brego/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jul 2019 07:35:56 GMT -->
<head>
<title>@yield('title') | پنل مدیریت مسعود عسگری </title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Brego Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- VENDOR CSS -->

<link rel="stylesheet" href="{{asset('/Admin_dist/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/Admin_dist/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('/Admin_dist/assets/vendor/animate-css/vivify.min.css')}}">

<link rel="stylesheet" href="{{asset('/Admin_dist/assets/vendor/c3/c3.min.css')}}"/>
<link rel="stylesheet" href="{{asset('/Admin_dist/assets/vendor/chartist/css/chartist.css')}}">
<link rel="stylesheet" href="{{asset('/Admin_dist/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
<link rel="stylesheet" href="{{asset('/Admin_dist/assets/vendor/toastr/toastr.min.css')}}">
<link rel="stylesheet" href="{{asset('/Admin_dist/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css')}}"/>

{{-- selec2 --}}
<link rel="stylesheet" href="{{asset('/Admin_dist/assets/js/select2/select2.css')}}"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('/Admin_dist/light/assets/css/site.min.css')}}">

{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}

@yield('head')
@livewireStyles
</head>
<body class="theme-blush">

<!-- Page Loader -->
{{-- <div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('/Shop_dist/images/ariyaniroo-icon.png')}}" width="40" height="40" alt="Ariya Niroo"></div>
        <p>لطفا صبر کنید...</p>
    </div>
</div> --}}



<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-left">
                پنل مدیریت مسعود عسگری
            </div>

            <div class="navbar-right">
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('logout') }}" class="icon-menu"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="خروج"><i class="icon-power"></i></a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>


    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="{{route('admin.index')}}"><span>پنل مدیریتی</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="https://via.placeholder.com/140x140" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>خوش آمديد،</span>
                    
                    <a class=" user-name"><strong>{{auth()->user()->name}}</strong></a>
                </div>
                <a href="{{route('main')}}"><button class="btn btn-sm btn-block btn-primary btn-round mt-3" >مشاهده سایت</button></a>
            </div>
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    @yield('menu')
                    
                </ul>
            </nav>
        </div>
    </div>

    <div id="main-content">
        <div class="block-header">
            <div class="clearfix row">
                <div class="col-md-6 col-sm-12">
                    @yield('breadcrumb')
                </div>
                {{-- <div class="text-right col-md-6 col-sm-12">

                    <div class="mr-4 inlineblock vivify swoopInTop delay-900">بازدیدکنندگان <span id="mini-bar-chart1" class="mini-bar-chart"></span></div>
                    <div class="mr-4 inlineblock vivify swoopInTop delay-950">بازدیدها <span id="mini-bar-chart2" class="mini-bar-chart"></span></div>
                    <div class="delay-1000 inlineblock vivify swoopInTop">چت ها <span id="mini-bar-chart3" class="mini-bar-chart"></span></div>

                </div> --}}
            </div>
        </div>

        {{ $slot }}

    </div>

<!-- Javascript -->
<script src="{{asset('/Admin_dist/light/assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('/Admin_dist/light/assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{asset('/Admin_dist/light/assets/bundles/jvectormap.bundle.js')}}"></script>
<script src="{{asset('/Admin_dist/assets/vendor/toastr/toastr.js')}}"></script>

<script src="{{asset('/Admin_dist/light/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('/Admin_dist/light/assets/js/index.js')}}"></script>
<script src="{{asset('/Admin_dist/assets/js/select2/select2.full.js')}}"></script>

<script src="{{asset('/js/sweetalert2.js')}}"></script>
{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
<script>
    window.addEventListener('swal', function(e){
        Swal.fire(e.detail);
    });
</script>

<script>
    $(function() {
        // toastr.options.timeOut = "false";
        // toastr.options.closeButton = false;
        // toastr.options.positionClass = 'toast-bottom-right';
        // toastr['info']('سلام، این نسخه آزمایشی با پشتیبانی HTML است. بنابراین شما می توانید عناصر HTML مانند <a href="javascript:void(0);">این لینک</a>');

        $('.btn-toastr').on('click', function() {
            $context = $(this).data('context');
            $message = $(this).data('message');
            $position = $(this).data('position');

            if ($context === '') {
                $context = 'info';
            }

            if ($position === '') {
                $positionClass = 'toast-bottom-right';
            } else {
                $positionClass = 'toast-' + $position;
            }

            toastr.remove();
            toastr[$context]($message, '', {
                positionClass: $positionClass,
                closeButton : false
            });
        });

        $('#toastr-callback1').on('click', function() {
            $message = $(this).data('message');

            toastr.options = {
                "timeOut": "300",
                "onShown": function() {
                    alert('onShown callback');
                },
                "onHidden": function() {
                    alert('onHidden callback');
                }
            };

            toastr['info']($message);
        });

        $('#toastr-callback2').on('click', function() {
            $message = $(this).data('message');

            toastr.options = {
                "timeOut": "10000",
                "onclick": function() {
                    alert('onclick callback');
                },
            };

            toastr['info']($message);

        });

        $('#toastr-callback3').on('click', function() {
            $message = $(this).data('message');

            toastr.options = {
                "timeOut": "10000",
                "closeButton": true,
                "onCloseClick": function() {
                    alert('onCloseClick callback');
                }
            };

            toastr['info']($message);
        });
    });
</script>
@yield('script')
@livewireScripts
</body>
</html>
