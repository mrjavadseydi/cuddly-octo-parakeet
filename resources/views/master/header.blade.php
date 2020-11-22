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
