<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8" />
    <title>{{env('APP_NAME')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Bluetec Saas Software Startup Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- CSS Files
================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v26.0.2/dist/font-face.css" rel="stylesheet" type="text/css" />
    <style>
        *{
            font-family: Vazir;
            direction: rtl;
        }
        .vazir{
            font-family: Vazir;
        }
        footer{
            padding-top: 10px;
            padding-bottom: 1px;
            background-color: #012951 !important;
            color: white !important;
        }
    </style>
</head>

<body>
<div id="wrapper" >
    <!-- header begin -->
    <header class="header-light transparent scroll-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between">
                        <div class="align-self-center header-col-left">

                        </div>
                        <div class="align-self-center ml-auto header-col-mid">
                            <!-- mainmenu begin -->
                            <ul id="mainmenu">
                                <li><a href="contact-us.html">ارتباط با من</a></li>

                                <li>
                                    <a href="#">حساب کاربری</a>
                                    <ul>
                                        <li><a href="{{route('login')}}" class="text-right">ورود</a></li>
                                        <li><a href="{{route('register')}}" class="text-right">ثبت نام</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.html">گالری</a></li>

                                <li><a href="contact-us.html">بلاگ</a></li>
                                <li>
                                    <a href="{{route('index')}}">خانه</a>
                                </li>
                            </ul>
                        </div>
                        <div class="align-self-center mr-auto header-col-right">
                            <a class="btn-custom" href="{{route('login')}}" style="font-family: Vazir"> ورود </a>
                            <span id="menu-btn"></span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header close -->
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section data-bgimage="url(images/background/1.png) bottom" class="full-height vertical-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 wow fadeInRight" data-wow-delay=".5s">
                        <h4 class="vazir text-right">شروعی در دنیای تکنولوژی</h4>
                        <div class="spacer-10"></div>
                        <h1 class="vazir"> <span class="id-color">آکادمی جواد آنلاین </span> تنها نیاز شما برای شروع... </h1>
                        <div class="mb-sm-30"></div>
                    </div>

                    <div class="col-lg-6 offset-lg-1 wow fadeInLeft" data-wow-delay=".5s">
                        <img src="images/misc/1.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <section id="section-highlight" data-bgimage="url(images/background/2.png) top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="text-center">
                            <h2 class="uptitle id-color vazir"><span class="uptitle id-color"></span> خدمات ما</h2>
                            <p class="lead">سرعت رشد روز افزون تکنولوژی و تاثیر انتخاب شرکت طراحی سایت در عملکرد تجاری مجموعه شما و اهمیت بسزایی که در افزایش درآمد تجارت شما دارد و تاثیر سایت طراحی شده در کسب و کار شما تا حدیست که می تواند آن را دگرگون کند</p>
                            <div class="spacer-20"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- feature box begin -->
                    <div class="col-lg-4 col-md-6 mb40 wow fadeInUp" data-wow-delay="0s">
                        <div class="feature-box f-boxed style-3">
                            <i class="bg-color i-circle fa fa-wordpress"></i>
                            <div class="text text-right">
                                <a href="" class="vazir"><h4 class="vazir">طراحی سایت</h4></a>
                                هدف پپرو فروش وب سایت به شما نیست، ما وب سایتی طراحی می کنیم که برای شما بفروشد!
                            </div>
                            <i class="wm fa fa-wordpress"></i>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <!-- feature box begin -->
                    <div class="col-lg-4 col-md-6 mb40 sq-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="feature-box f-boxed style-3">
                            <i class="bg-color-2 i-circle fa fa-paper-plane-o"></i>
                            <div class="text text-right">
                                <a  href="" class="vazir"><h4 class="vazir">دیجیتال مارکتینگ</h4></a>
                                بازاریابی شما  با ابزار های دیجیتال جدید و بروز در شبکه های اجتماعی و ...
                            </div>
                            <i class="wm fa fa-paper-plane-o"></i>
                        </div>
                    </div>
                    <!-- feature box close -->

                    <!-- feature box begin -->
                    <div class="col-lg-4 col-md-6 mb40 sq-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="feature-box f-boxed style-3">
                            <i class="bg-color-3 i-circle fa fa-line-chart"></i>
                            <div class="text text-right">
                                <a  href="" class="vazir"><h4 class="vazir">سئو</h4></a>
                                داشتن وب سایت صرفا شرط لازم برای دیده شدن کسب و کار شما می باشد اما شرط کافی نیست
                            </div>
                            <i class="wm i-circle fa fa-line-chart"></i>
                        </div>
                    </div>
                    <!-- feature box close -->
                </div>
            </div>
        </section>

        <section id="section-banner" class="no-top" data-bgimage="url(images/background/3.png) top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-none d-lg-block d-xl-block text-center wow fadeInRight" data-wow-delay="0s">
                        <img class="relative img-fluid" src="images/misc/5.png" alt="" />
                    </div>

                    <div class="col-lg-5 offset-md-1 wow fadeInLeft" data-wow-delay="0s">
                        <h2 class="vazir text-right">
                            حفظ <br />
                            <span class="id-color">محرمانگی </span> پروژه شما
                        </h2>
                        <p class="text-right">
                            قرارداد منع افشای اطلاعات یا پیمان نامه عدم افشا یا NDA (با تلفظ فارسی ان دی ای) نوعی از قرارداد بین دو شخص حقیقی یا حقوقی به منظور توافق در حفظ محرمانگی داده‌ها، اطلاعات و دانش مرتبط با حوزه کاری است که حین انجام کار یکی از طرفین یا هردو مایل، ملزم و یا ناچار به اشتراک گذاری آن در جهت پیشبرد اهداف کاری هستند.
                        </p>
                        <div class="spacer-half"></div>
                    </div>

                    <div class="spacer-double"></div>
                </div>
            </div>
        </section>


        <section id="section-fun-facts" class="pt60 pb60 text-light bg-color-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0s">
                        <div class="de_count">
                            <h3 class="timer" data-to="19" data-speed="3000">0</h3>
                            <span>وبسایت ها</span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".25s">
                        <div class="de_count">
                            <h3 class="timer" data-to="26" data-speed="3000">0</h3>
                            <span>ربات ها</span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="de_count">
                            <h3 class="timer" data-to="9" data-speed="3000">0</h3>
                            <span>میانگین امتیاز مشتریان(0/10)</span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".75s">
                        <div class="de_count">
                            <h3 class="timer" data-to="6" data-speed="3000">0</h3>
                            <span>سال تجربه</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->

    <!-- footer begin -->
    <footer class="footer-light">
        <div class="container">
            <div class="text-center">

                <div class="text-center">

                    <p class="text-center">تمام حقوق مادی و معنوی سایت محفوظ است </p>
                </div>

            </div>
        </div>
    </footer>
    <!-- footer close -->

    <div id="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>

<!-- Javascript Files
================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/easing.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/enquire.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.plugin.js"></script>
<script src="js/typed.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/designesia.js"></script>


</body>
</html>
