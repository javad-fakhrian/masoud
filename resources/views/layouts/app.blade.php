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
                                <a href="{{route('work.sample')}}">نمونه کارها</a>
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
        <!-- Hero section   -->
        <div class="hero-wrap fl-wrap full-height">
            <div class="hero-item">
                <div class="overlay"></div>
                <div class="bg" data-bg="Picture/1.jpg"></div>
            </div>
            <div class="hero-wrap-item  right-her alt">
                <div class="container">
                    <div class="fl-wrap section-entry level-3">
                        <h2>خوش آمدید</h2>
                        <h3>مسعود عسگری هستم ، انیماتور و موشن گرافیست.</h3>
                        <a href="#sec2" class="btn hide-icon custom-scroll-link"><i class="fa fa-flag-checkered"></i><span>بیایید شروع کنیم</span> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero section   end -->
        <!-- fixed column  -->
        <div class="fixed-column">
            <div class="column-image fl-wrap full-height">
                <div class="bg bg-scroll"></div>
                <div class="overlay"></div>
            </div>
            <div class="bg-title alt"><span></span></div>
            <div class="progress-bar-wrap">
                <div class="progress-bar"></div>
            </div>
        </div>
        <!-- fixed column  end -->
        <!-- column-wrap  -->
        <div class="column-wrap scroll-content">
            <!--=============== content ===============-->
            <!-- scroll page navigation -->
            <div class="scroll-nav-holder fl-wrap">
                <nav class="scroll-nav fl-wrap">
                    <ul>
                        <li><a class="scroll-link fbgs" href="#sec2" data-bgscr="Picture/5.jpg" data-bgtex="درباره"><span>درباره</span></a></li>
                        <li><a class="scroll-link" href="#sec4" data-bgscr="Picture/7.jpg" data-bgtex="رزومه"><span>رزومه</span></a></li>
                        <li><a class="scroll-link" href="#sec5" data-bgscr="Picture/6.jpg" data-bgtex="خدمات"><span>خدمات</span></a></li>
                        <li><a class="scroll-link" href="#sec6" data-bgscr="Picture/2.jpg" data-bgtex="مهارت ها"><span>مهارت ها</span></a></li>
                        <li><a class="scroll-link" href="#sec7" data-bgscr="Picture/4.jpg" data-bgtex="مشتریان"><span>مشتریان</span> </a></li>
                    </ul>
                </nav>
            </div>
            <!-- scroll page navigation end -->
            <!-- content   -->
            <div class="content">
                <!-- section-->
                <section id="sec2" data-scrollax-parent="true" class="scroll-con-sec   small-pad-sec">
                    <div class="container">
                        <div class="section-title">
                            <h2> درباره من</h2>
                            {{-- <p>متن زیر به شما کمک میکنه تا بیشتر با من آ شنا شوید .</p> --}}
                            <div class="clearfix"></div>
                            <span class="bold-separator"></span>
                        </div>
                        <div class="fl-wrap abt-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box-item vis-det fl-wrap">
                                        <img src="Picture/3.jpg" class="respimg" alt="مسعود عسگری">
                                        <a data-src="Picture/3.jpg" class="image-popup"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-subtitle">مسعود عسگری</h4>
                                    <h3 class="text-title">انیماتور و <span> موشن گرافیست</span> </h3>
                                    <p>کارشناس نرم افزار ، 22 ساله ، ساکن شهرکرد (استان چهارمحال و بختیاری) </p>
                                    <p>حدودا ترم 2 کارشناسی بودم که به صورت کامال اتفاقی با تدوین ویدیو آشنا شدم و به مرور زمان و کمی 
                                        فعالیت در حوزه تدوین و همکاری با افراد با تجربه تر سعی کردم دانش و مهارت خودم رو ارتقا بدم . بعد از 
                                        گذشت 4 سال تونستم ابزار و وسایل مورد نیازم در این حوزه رو فراهم کنم و در حال حاضر آماده ی هم کاری 
                                        ه ای بیشتر با شرکت ها و برند های تجاری هستم تا بتونن در تبلیغاتشون با استفاده از موشن گرافیک های 
                                        جذاب ، بهتر و پربازده تر عمل کنن و محصوالت و برند خودشون رو به بهترین شکل به مشتریانشون عرضه 
                                        کنند.</p>
                                    <a href="portfolio.html" class="btn hide-icon"><i class="fa fa-eye"></i><span>نمونه کارهای من</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="parallax-title right-pos" data-scrollax="properties: { translateY: '-350px' }">درباره من</div>
                </section>
                <!-- section end -->
                <!-- section facts -->
                {{-- <section class="scroll-con-sec dec-sec">
                    <div class="container">
                        <div class="inline-facts-holder fl-wrap">
                            <!-- inline-facts -->
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="461" data-num="461">0</div>
                                    </div>
                                </div>
                                <h6>پروژه های تمام شده</h6>
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="461" data-num="461">0</div>
                                    </div>
                                </div>
                                <h6>پروژه های تمام شده</h6>
                                <i class="fa fa-trophy" aria-hidden="true"></i>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="168" data-num="168">0</div>
                                    </div>
                                </div>
                                <h6>مشتریان راضی</h6>
                                <i class="fa fa-child" aria-hidden="true"></i>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="222" data-num="222">0</div>
                                    </div>
                                </div>
                                <h6>ساعت کاری </h6>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <!-- inline-facts end -->
                        </div>
                    </div>
                    <!-- container end  -->
                </section> --}}
                <!-- section end -->
                <!--=============== section resume  ===============-->
                <section data-scrollax-parent="true" id="sec4" class="scroll-con-sec dec-sec">
                    <div class="container">
                        <div class="section-title">
                            <h2>رزومه</h2>
                            {{-- <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p> --}}
                            <div class="clearfix"></div>
                            <span class="bold-separator"></span>
                        </div>
                        <div class="custom-inner-holder">
                            <!-- 1 -->
                            <div class="custom-inner">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="resum-header workres">
                                            <i class="fa fa-briefcase"></i>
                                            <h3> کار در مجموعه ی پارسیان رایانه </h3>
                                            {{-- <span>  1395-1399</span> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        {{-- <h4> پروژه "راستچین" را تکمیل کنید</h4> --}}
                                        <p>به مدت 2 سال افتخار همکاری در مجموعه ی پارسیان رایانه را داشتم . حوزه ی فعالیت این شرکت 
                                            فروش کامپیوتر،لپتاپ و لوازم جانبی بود که شاخه ی فعالیت من در این مجموعه مدیریت فروش محصوالت و 
                                            تبلیغات و بازاریابی این مجموعه بود.</p>
                                        {{-- <ul>
                                            <li>طرح پورتالهای در دار</li>
                                            <li>مشخصات چیدمان</li>
                                            <li>طراحی داخلی</li>
                                        </ul> --}}
                                        {{-- <span class="custom-inner-dec"></span> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- 1 -->
                            <!-- 2 -->
                            <div class="custom-inner">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="resum-header educ">
                                            <i class="fa fa-briefcase"></i>
                                            <h3>کار در استودیو فاطر</h3>
                                            {{-- <span>  1395-1399</span> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        {{-- <h4>گذرگاه لوریم ایپسوم</h4> --}}
                                        <p>به مدت 1 سال افتخار همکاری با استودیو فاطر را داشتم . استودیو فاطر یک آژانس تبلیغاتی بود که 
                                            در حوزه ی ساخت تیزرهای تبلیغاتی،موشن گرافیک،طراحی لوگو و ... فعالیت داشت و من در این مجموعه به 
                                            عنوان یک انیماتور و موشن گرافیست مشغول به کار بودم. </p>
                                        {{-- <span class="custom-inner-dec"></span> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- 2 end -->
                            <!-- 3 -->
                            <div class="custom-inner">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="resum-header workres">
                                            <i class="fa fa-briefcase"></i>
                                            <h3>کار در شرکت پیکستل </h3>
                                            {{-- <span>  1395-1399</span> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        {{-- <h4>برای اولین بار</h4> --}}
                                        <p> به مدت دو سال افتخار همکاری با مجموعه ی پیکستل را داشتم. این شرکت در حوزه ی ساخت 
                                            انیمیشن های تخصصی در حوزه های پزشکی،صنعتی،علمی و آموزشی فعالیت می کند و من به عنوان یک 
                                            انیماتور و موشن گرافیست در این مجموعه در حال حاضر مشغول به کار هستم.</p>
                                        {{-- <ul>
                                            <li>طرح پورتالهای در دار</li>
                                            <li>مشخصات چیدمان</li>
                                            <li>طراحی داخلی</li>
                                        </ul>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد. </p> --}}
                                        {{-- <span class="custom-inner-dec"></span> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- 3 end -->
                        </div>
                        {{-- <a href="#" class="btn hide-icon"><i class="fa fa-file-pdf-o"></i><span>دانلود رزومه</span></a> --}}
                    </div>
                    <div class="parallax-title right-pos" data-scrollax="properties: { translateY: '-350px' }">رزومه من</div>
                </section>
                <!-- section end -->
                <!-- section-->
                <section id="sec5" data-scrollax-parent="true" class="scroll-con-sec dec-sec">
                    <div class="sec-dec right-rot"></div>
                    <div class="container">
                        <div class="section-title">
                            <h2>خدمات</h2>
                            {{-- <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p> --}}
                            <div class="clearfix"></div>
                            <span class="bold-separator"></span>
                        </div>
                        <div class="fl-wrap serv-wrap">
                            <div class="row">
                                <div class="col-md-3">
                                    <ul class="tabs sl-tabs">
                                        <li class="tab-link current" data-tab="tab-1">
                                            <div class="tb-item">
                                                {{-- <i class="fa fa-fighter-jet"></i> --}}
                                                <h3> ساخت و تولید موشن گرافیک</h3>
                                            </div>
                                        </li>
                                        <li class="tab-link" data-tab="tab-2">
                                            <div class="tb-item">
                                                {{-- <i class="fa fa-draw-polygon"></i> --}}
                                                <h3>ساخت و تولید لوگو موشن</h3>
                                            </div>
                                        </li>
                                        <li class="tab-link" data-tab="tab-3">
                                            <div class="tb-item">
                                                {{-- <i class="fa fa-mobile"></i> --}}
                                                <h3>ساخت و تولید استوری موشن</h3>
                                            </div>
                                        </li>
                                        <li class="tab-link" data-tab="tab-4">
                                            <div class="tb-item">
                                                {{-- <i class="fa fa-film"></i> --}}
                                                <h3>ساخت و تولید تیزرهای تبلیغاتی</h3>
                                            </div>
                                        </li>
                                        <li class="tab-link" data-tab="tab-5">
                                            <div class="tb-item">
                                                {{-- <i class="fa fa-photo-video"></i> --}}
                                                <h3> خدمات ویدیویی برای شبکه های اجتم اعی</h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-9">
                                    <!-- tab1 -->
                                    <div id="tab-1" class="tab-content current">
                                        
                                        <h3>ساخت و تولید موشن گرافیک</h3>
                                        <p>می توان گفت موشن گرافیک در واقع نقاشی هایی هستند که یک داستان را روایت می کنند. داستان های موشن گرافیک را می توان با استفاده از تصاویر متحرک نقل کرد. این تصاویر می توانند 2 یا 3 بعدی باشند. گزینه هایی زیادی وجود دارد و همین می تواند دلیل علاقۀ ما به آنها باشد.اگر با موشن گرافیک آشنا نیستید، می توانید متن زیر را مطالعه کنید و اطلاعات لازم را کسب کنید. حال که فایل های ویدئویی مورد استفادۀ افراد زیادی است، موشن گرافیک بیش از هر زمان دیگری محبوب شده است.</p>
                                        
                                    </div>
                                    <!-- tab1 end -->
                                    <!-- tab2 -->
                                    <div id="tab-2" class="tab-content">
                                        {{-- <div class="row">
                                            <div class="col-md-7">
                                                <div class="box-item vis-det fl-wrap">
                                                    <img src="images/services/2.jpg" class="respimg" alt="">
                                                    <a data-src="images/services/2.jpg" class="image-popup"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <ul class="dec-list">
                                                    <li>تحقیق/توسعه</li>
                                                    <li> رابط کاربری / عکاسی </li>
                                                    <li> تبلیغات / بازاریابی </li>
                                                </ul>
                                                <span class="price">300.000 تومان</span>
                                            </div>
                                        </div> --}}
                                        <h3>طراحی گرافیکی</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                                        </p>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    </div>
                                    <!-- tab2 end -->
                                    <!-- tab3-->
                                    <div id="tab-3" class="tab-content">
                                        {{-- <div class="row">
                                            <div class="col-md-7">
                                                <div class="box-item vis-det fl-wrap">
                                                    <img src="images/services/3.jpg" class="respimg" alt="">
                                                    <a data-src="images/services/3.jpg" class="image-popup"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <ul class="dec-list">
                                                    <li>فلایر / برندینگ</li>
                                                    <li> بازاریابی / توسعه </li>
                                                    <li>رابط کاربری / عکاسی </li>
                                                </ul>
                                                <span class="price">400.000 تومان </span>
                                            </div>
                                        </div> --}}
                                        <h3>برندینگ</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی
                                            و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                                            اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                        </p>
                                        <P>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای در زبان فارسی ایجاد کرد.</p>
                                    </div>
                                    <!-- tab3 end -->
                                    <!-- tab3-->
                                    <div id="tab-4" class="tab-content">
                                        {{-- <div class="row">
                                            <div class="col-md-7">
                                                <div class="box-item vis-det fl-wrap">
                                                    <img src="images/services/1.jpg" class="respimg" alt="">
                                                    <a data-src="images/services/1.jpg" class="image-popup"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <ul class="dec-list">
                                                    <li> توسعه / بازاریابی</li>
                                                    <li> رابط کاربری / عکاسی </li>
                                                    <li>فلایر / تحقیق</li>
                                                </ul>
                                                <span class="price">200.000 تومان</span>
                                            </div>
                                        </div> --}}
                                        <h3>طراحی وب</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی
                                            و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </p>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    </div>
                                    <!-- tab3 end -->
                                    <!-- tab3-->
                                    <div id="tab-5" class="tab-content">
                                        {{-- <div class="row">
                                            <div class="col-md-7">
                                                <div class="box-item vis-det fl-wrap">
                                                    <img src="images/services/1.jpg" class="respimg" alt="">
                                                    <a data-src="images/services/1.jpg" class="image-popup"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <ul class="dec-list">
                                                    <li> توسعه / بازاریابی</li>
                                                    <li> رابط کاربری / عکاسی </li>
                                                    <li>فلایر / تحقیق</li>
                                                </ul>
                                                <span class="price">200.000 تومان</span>
                                            </div>
                                        </div> --}}
                                        <h3>طراحی وب</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی
                                            و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </p>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                    </div>
                                    <!-- tab3 end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class="order-wrap fl-wrap color-bg">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>آماده سفارش پروژه خود هستید؟</h4>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{route('contactus')}}" class="ord-link">ارتباط برقرار کنید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="parallax-title right-pos" data-scrollax="properties: { translateY: '-350px' }">چه کاری انجام می دهم</div>
                </section>
                <!-- section end -->
                <!-- section-->
                <section id="sec6" data-scrollax-parent="true" class="scroll-con-sec  dec-sec">
                    <div class="container">
                        <div class="section-title">
                            <h2>مهارت ها</h2>
                            {{-- <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p> --}}
                            <div class="clearfix"></div>
                            <span class="bold-separator"></span>
                        </div>
                        <div class="skills-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- <blockquote>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد</p>
                                    </blockquote> --}}
                                    <ul class="dec-list">
                                        <li>مسلط به کار با نرم افزار قدرتمند افترافکت</li>
                                        <li>بسته به نیاز خود تا حدودی به کار با نرم افزار های فتوشاپ ، ایلاستریتور ، پریمیر مسلط هستم.</li>
                                        <li> شناخت الگوریتم های شبکه های اجتماعی و مشاوره در خصوص نحوه بازاریابی و تبلیغات.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="fl-wrap">
                                        <div class="skillbar-box animaper">
                                            <!-- skill 1-->
                                            <div class="custom-skillbar-title"><span>افترافکت</span></div>
                                            <div class="skill-bar-percent">95%</div>
                                            <div class="skillbar-bg" data-percent="95%">
                                                <div class="custom-skillbar"></div>
                                            </div>
                                            <!-- skill 2-->
                                            <div class="custom-skillbar-title"><span>فتوشاپ</span></div>
                                            <div class="skill-bar-percent">65%</div>
                                            <div class="skillbar-bg" data-percent="65%">
                                                <div class="custom-skillbar"></div>
                                            </div>
                                            <!-- skill 3-->
                                            <div class="custom-skillbar-title"><span>ایلاستریتور</span></div>
                                            <div class="skill-bar-percent">75%</div>
                                            <div class="skillbar-bg" data-percent="75%">
                                                <div class="custom-skillbar"></div>
                                            </div>
                                            <!-- skill 1-->
                                            <div class="custom-skillbar-title"><span>پریمیر</span></div>
                                            <div class="skill-bar-percent">95%</div>
                                            <div class="skillbar-bg" data-percent="95%">
                                                <div class="custom-skillbar"></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h4 class="bold-title">مهارت های زبان</h4>
                            </div>
                            <div class="col-md-10">
                                <div class="piechart-holder animaper">
                                    <div class="row">
                                        <!-- 1  -->
                                        <div class="piechart col-md-4">
                                            <span class="chart" data-percent="100">
                                                <span class="percent"></span>
                                            </span>
                                            <div class="clearfix"></div>
                                            <div class="skills-description">
                                                <h4>فارسی</h4>
                                            </div>
                                        </div>
                                        <!-- 1 end -->
                                        <!-- 2  -->
                                        <div class="piechart col-md-4">
                                            <span class="chart" data-percent="95">
                                                <span class="percent"></span>
                                            </span>
                                            <div class="clearfix"></div>
                                            <div class="skills-description">
                                                <h4>انگلیسی</h4>
                                            </div>
                                        </div>
                                        <!-- 2 end  -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="parallax-title right-pos" data-scrollax="properties: { translateY: '-350px' }">مهارت های من</div>
                </section>
                <!-- section end -->
                <!-- section  -->
                <section id="sec7" data-scrollax-parent="true" class="scroll-con-sec">
                    <div class="container">
                        <div class="section-title">
                            <h2>گواهینامه ها</h2>
                            {{-- <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p> --}}
                            <div class="clearfix"></div>
                            <span class="bold-separator"></span>
                        </div>
                        <div class="testimonials-slider-holder fl-wrap">
                            <div class="testimonials-slider owl-carousel">
                                <!-- item-->
                                <div class="item">
                                    <div class="testi-item">
                                        <div class="testi-image">
                                            <img src="front/images/testim/1.jpg" alt="">
                                        </div>
                                        <div class="testi-text fl-wrap">
                                            <h3>فرهاد محمدی</h3>
                                            <ul class="star-rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                                                متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد</p>
                                            <a href="#" class="testim-link">از طریق توییتر</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item end-->
                                <!-- item-->
                                <div class="item">
                                    <div class="testi-item">
                                        <div class="testi-image">
                                            <img src="front/images/testim/2.jpg" alt="">
                                        </div>
                                        <div class="testi-text fl-wrap">
                                            <h3>سارا راد</h3>
                                            <ul class="star-rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                                                متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد</p>
                                            <a href="#" class="testim-link">از طریق اینستاگرام</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item end-->
                                <!-- item-->
                                <div class="item">
                                    <div class="testi-item">
                                        <div class="testi-image">
                                            <img src="front/images/testim/3.jpg" alt="">
                                        </div>
                                        <div class="testi-text fl-wrap">
                                            <h3>سعید راد</h3>
                                            <ul class="star-rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                                                متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد</p>
                                            <a href="#" class="testim-link">از طریق فیسبوک</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- item end-->
                            </div>
                            <div class="customNavigation">
                                <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                            </div>
                            <div class="teti-counter"></div>
                        </div>
                        <!-- clients-->
                        {{-- <div class="clients-list fl-wrap">
                            <ul>
                                <li><a href="#" target="_blank"><span><img src="front/images/clients/1.png" alt=""></span></a></li>
                                <li><a href="#" target="_blank"><span><img src="front/images/clients/2.png" alt=""></span></a></li>
                                <li><a href="#" target="_blank"><span><img src="front/images/clients/3.png" alt=""></span></a></li>
                                <li><a href="#" target="_blank"><span><img src="front/images/clients/4.png" alt=""></span></a></li>
                                <li><a href="#" target="_blank"><span><img src="front/images/clients/5.png" alt=""></span></a></li>
                            </ul>
                        </div> --}}
                        <!-- clients end -->
                    </div>
                    <!-- parallax-title-->
                    <div class="parallax-title right-pos" data-scrollax="properties: { translateY: '-350px' }">مشتریان</div>
                    <!-- parallax-title end -->
                </section>
                <!-- section  end-->
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
</body>
</html>
