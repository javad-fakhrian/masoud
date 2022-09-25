<!DOCTYPE HTML>
<html dir="rtl">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>مسعود- Creative Responsive Personal Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="front/css/reset.css">
    <link type="text/css" rel="stylesheet" href="front/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="front/css/style.css">
    <link type="text/css" rel="stylesheet" href="front/css/color.css">
    <link type="text/css" rel="stylesheet" href="front/css/yourstyle.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="front/images/favicon.ico">
</head>

<body>
    <!--================= loader ================-->
    <div class="loader-holder">
        <div class="loader-inner loader-vis">
            <div class="loader"></div>
        </div>
    </div>
    <!--================= loader end ================-->
    <!--================= main start ================-->
    <div id="main">
        <!--================= Header ================-->
        <header class="main-header">
            <!-- <a href="index.html" class="logo-holder"><img src="front/front/images/logo.png" alt=""></a> -->
            <!-- info-button -->
            <div class="nav-button" id="open-button">
                <span class="menu-global menu-top"></span>
                <span class="menu-global menu-middle"></span>
                <span class="menu-global menu-bottom"></span>
            </div>
            <!-- info-button end-->
            <!-- <div class="show-share isShare"><img src="front/images/share.png" alt=""></div> -->
        </header>
        <!-- End header -->
        <!--================= menu ================-->
        <div class="menu-wrap">
            <div class="menu-inner">
                <!-- menu logo-->
                <!-- <a href="index.html" class="menu-logo"><img src="front/front/images/logo2.png" alt=""></a> -->
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
        <!-- column-wrap  -->
        <div class="content no-bg fscon">
            <!-- section-->
            <section class="no-padding">
                <!-- <div class="fixed-filter">
                    <div class="filter-button">فیلتر</div>
                    <div class="folio-counter">
                        <div class="num-album"></div>
                        <div class="all-album"></div>
                    </div>
                    <div class="gallery-filters">
                        <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">همه</a>
                        <a href="#" class="gallery-filter" data-filter=".web">طراحی وب</a>
                        <a href="#" class="gallery-filter" data-filter=".photography">تصویر</a>
                        <a href="#" class="gallery-filter" data-filter=".branding">تجاری</a>
                        <a href="#" class="gallery-filter" data-filter=".uides">Ui طراحی</a>
                    </div>
                </div> -->
                <!-- portfolio start -->
                <div class="gallery-items min-pad hde four-column">
                    
                   
                   
                   @foreach(App\Models\Work::where('status',1)->get() as $work)
                        @if($work->type == 'pic')
                            <div class="gallery-item photography">
                                <div class="grid-item-holder">
                                    <a href="#"><img src="{{$work->url}}" alt="">
                                    <div class="box-item hd-box">
                                        <div class=" fl-wrap full-height">
                                            <!-- <div class="hd-box-wrap">
                                                <h2><a href="portfolio-single.html">ماشین قدیمی در خیابان</a></h2>
                                                <p><a href="#"> عکاسی </a> <span> / </span><a href="#"> توسعه</a></p>
                                            </div> -->
                                            <!-- <a data-src="{{$work->url}}" class="image-popup"><i class="fa fa-search"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                        <div class="gallery-item photography">
                        <div class="grid-item-holder">
                            <p>salam</p>
                        </div>
                        </div>
                            
                        @endif

                    @endforeach
                   
                </div>
                <!-- portfolio end -->
            </section>
            <!-- section end -->
        </div>
        <!-- content end -->
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
        <!-- <div class="share-container  isShare" data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div> -->
        <!-- Share container  end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script type="text/javascript" src="front/js/jquery.min.js"></script>
    <script type="text/javascript" src="front/js/plugins.js"></script>
    <script type="text/javascript" src="front/js/scripts.js"></script>
</body>


</html>