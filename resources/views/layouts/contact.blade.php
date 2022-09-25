<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>مسعود عسگری</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <link type="text/css" rel="stylesheet" href="front/css/reset.css">
    <link type="text/css" rel="stylesheet" href="front/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="front/css/style.css">
    <link type="text/css" rel="stylesheet" href="front/css/color.css">
    <link type="text/css" rel="stylesheet" href="front/css/yourstyle.css">
    
    <link rel="shortcut icon" href="front/images/favicon.ico">
    @livewireStyles
</head>
<body>

    <div class="loader-holder">
        <div class="loader-inner loader-vis">
            <div class="loader"></div>
        </div>
    </div>

    <div id="main">
        <!--================= Header ================-->
        <header class="main-header">
            <a href="index.html" class="logo-holder"><img src="front/images/logo.png" alt=""></a>
            <!-- info-button -->
            <div class="nav-button" id="open-button">
                <span class="menu-global menu-top"></span>
                <span class="menu-global menu-middle"></span>
                <span class="menu-global menu-bottom"></span>
            </div>
            <!-- info-button end-->
            {{-- <div class="show-share isShare"><img src="front/images/share.png" alt=""></div> --}}
        </header>
        <!-- End header -->
        <!--================= menu ================-->
        <div class="menu-wrap">
            <div class="menu-inner">
                <!-- menu logo-->
                <a href="index.html" class="menu-logo"><img src="front/images/logo2.png" alt=""></a>
                <!-- menu logo end -->
                <div class="hid-men-wrap   alt">
                    <div id="hid-men">
                        <ul class="menu">
                            <li>
                                <a href="{{route('main')}}">خانه</a>
                            </li>
                            @auth
                                @if(auth()->user()->is_admin == 1)
                                    <li>
                                        <a href="{{route('admin.index')}}">ورود به پنل مدیریت</a> 
                                    </li>
                                @endif
                            @endauth

                            @guest
                                <li>
                                    <a href="{{route('login')}}">ورود</a>
                                </li>
                                <li>
                                    <a href="{{route('register')}}">ثبت نام</a>
                                </li>
                            @endguest
                            <li>
                                <a href="#">نمونه کارها</a>
                            </li>
                            <li><a href="{{route('contactus')}}">تماس با ما</a></li>
                            @auth
                                <li><a href="{{ route('logout') }}" class="icon-menu"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="خروج">خروج</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
            <div class="morph-shape" id="morph-shape" data-morph-open="M-7.312,0H15c0,0,66,113.339,66,399.5C81,664.006,15,800,15,800H-7.312V0z;M-7.312,0H100c0,0,0,113.839,0,400c0,264.506,0,400,0,400H-7.312V0z">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
                        <path d="M-7.312,0H0c0,0,0,113.839,0,400c0,264.506,0,400,0,400h-7.312V0z"/>
                    </svg>
            </div>
        </div>
        <!--menu end-->
        <!-- fixed column  -->
        <div class="fixed-column">
            <div class="column-image fl-wrap full-height">
                <div class="bg" data-bg="Picture/4.jpg"></div>
                <div class="overlay"></div>
            </div>
            <div class="bg-title alt"><span>مخاطبین</span></div>
            <div class="progress-bar-wrap">
                <div class="progress-bar"></div>
            </div>
        </div>
        <!-- fixed column  end -->
        <!-- column-wrap  -->
        <div class="column-wrap scroll-content">
            <!--=============== content ===============-->
            <!-- content   -->
            <div class="content">
                <!-- section-->
                <section data-scrollax-parent="true" class="dec-sec">
                    <div class="container">
                        <div class="section-title">
                            <h2> مخاطبین </h2>
                            <!-- <p>چاپگرها بلکه روزنامه در ستون آنچنان که لازم است و برای شرایط فعلی تکنولوژی و کاربردهای متنوع با هدف بهبود ابزارها می باشد.</p> -->
                            <div class="clearfix"></div>
                            <span class="bold-separator"></span>
                        </div>
                        <div class="fl-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-info">
                                        <h3>ایمیل</h3>
                                        <a href="#">masoud@gmail.com</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-info">
                                        <h3> شماره تلفن همراه </h3>
                                        <a href="#">09015612917</a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="map-box box-map">
                                <div id="map-canvas"></div>
                            </div>
                            <!-- contact info -->
                            <h4 class="bold-title">تماس بگیرید</h4>
                            <div class="fl-wrap">
                                <!-- contact form -->
                                <div id="contact-form">
                                    <div id="message"></div>
                                    {{$slot}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="parallax-title right-pos" data-scrollax="properties: { translateY: '-350px' }"> مخاطبین</div>
                </section>
                <!-- section end -->
                <!--  to top  -->
                <div class="small-sec fl-wrap">
                    <div class="to-top-wrap">
                        <a class="to-top" href="#"> <i class="fa fa-angle-double-up"></i> بازگشت به بالا</a>
                    </div>
                </div>
                <!-- to top end-->
            </div>
            <!-- content end -->
        </div>
        <!-- column-wrap end -->
        <!-- arrow nav -->
        <div class="arrowpagenav"></div>
        <!-- arrow nav end-->
        <!-- footer-->
        <footer class="main-footer">
            <a href="{{route('contactus')}}" class="mail-link"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            <!-- header-social-->
            <div class="footer-social">
                <ul>
                    {{-- <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li> --}}
                    {{-- <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li> --}}
                    <li><a href="https://www.instagram.com/masoudl79" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    {{-- <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li> --}}
                    {{-- <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li> --}}
                </ul>
            </div>
            <!-- header-social end-->
            <div class="copyright">&#169; مسعود عسگری  ، تمامی حقوق محفوظ است.</div>
        </footer>
        <!-- footer end -->
        <!-- Share container  -->
        <div class="share-container  isShare" data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
        <!-- Share container  end-->
    </div>


    <script type="text/javascript" src="front/js/jquery.min.js"></script>
    <script type="text/javascript" src="front/js/plugins.js"></script>
    <script type="text/javascript" src="front/js/scripts.js"></script>
    @livewireScripts
</body>
</html>
