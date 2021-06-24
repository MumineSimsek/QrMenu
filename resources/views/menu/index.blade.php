<!DOCTYPE html>
<html lang="en">

@if($cafe->theme_id == 0)
    <head>
        <title>{{$cafe->name}}</title>
        <link rel="shortcut icon" href="{{asset($cafe->logo)}}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Free Template by Free-Template.co"/>

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('menus')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('menus')}}/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('menus')}}/css/animate.css">

        <link rel="stylesheet" href="{{asset('menus')}}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('menus')}}/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{asset('menus')}}/css/magnific-popup.css">

        <link rel="stylesheet" href="{{asset('menus')}}/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="{{asset('menus')}}/css/jquery.timepicker.css">


        <link rel="stylesheet" href="{{asset('menus')}}/css/icomoon.css">
        <link rel="stylesheet" href="{{asset('menus')}}/css/style.css">
    </head>
    <body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <img src="{{asset($cafe->logo)}}" style="width: 10%">
            <a class="navbar-brand" href="index.html"> {{$cafe->name }}Menü</a>

        </div>
    </nav>
    <!-- END nav -->


    <section class="ftco-section" id="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5 ftco-animate">
                    {{--                <div class="media-body">--}}
                    {{--                    <img src="{{asset($cafe->logo)}}" class="img-fluid">--}}

                    {{--                </div>--}}
                    <h2 class="display-4">Menü Listesi</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead">Seçeneklerimize göz atın.</p>
                        </div>
                    </div>
                </div>
                @foreach($categories as  $category)
                    @if($category->status == 1)
                        <p style="color: black">  {{$category->name}}</p>

                        <div class="col-md-12 text-center">


                            <ul class="nav ftco-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">

                                @foreach($category->subCategories as $key => $subCategory)
                                    @if($subCategory->status == 1)
                                        <li class="nav-item ftco-animate">
                                            <a class="nav-link @if($key == 0 ) active @endif" id="pills-breakfast-tab"
                                               data-toggle="pill"
                                               href="#{{$subCategory->id}}{{$key}}" role="tab" aria-controls="pills-breakfast"
                                               aria-selected="true">{{$subCategory->name}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>

                            <div class="tab-content text-left">
                                @foreach($category->subCategories as $key2 => $subCategory)
                                    @if($subCategory->status == 1 )
                                        <div class="tab-pane fade show @if($key2==0) active @endif "
                                             id="{{$subCategory->id}}{{$key2}}" role="tabpanel"
                                             aria-labelledby="pills-breakfast-tab">

{{--                                           product area--}}
                                        </div>
                                    @endif
                                @endforeach

                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- END section -->


    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                            <li class="ftco-animate"><a href="https://www.instagram.com/cekirdekcafee/"><span
                                            class="icon-instagram"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md text-center">
                    <p>&copy; 2020. Tüm Hakları Saklıdır. <a href="https://albeyazilim.com/">AlbeYazılım</a> Tarafından
                        Tasarlandı.</p> <br> <img src="images/pandalogo.png" width="50px" height="50px">
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                    stroke="#F96D00"/>
        </svg>
    </div>


    <script src="{{asset('menus')}}/js/jquery.min.js"></script>
    <script src="{{asset('menus')}}/js/popper.min.js"></script>
    <script src="{{asset('menus')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('menus')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{asset('menus')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('menus')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('menus')}}/js/jquery.magnific-popup.min.js"></script>

    <script src="{{asset('menus')}}/js/bootstrap-datepicker.js"></script>
    <script src="{{asset('menus')}}/js/jquery.timepicker.min.js"></script>

    <script src="{{asset('menus')}}/js/jquery.animateNumber.min.js"></script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('menus')}}/js/google-map.js"></script>

    <script src="{{asset('menus')}}/js/main.js"></script>


    </body>
@elseif($cafe->theme_id == 1)
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

        <!-- Site Metas -->
        <title>QR Menü Listesi</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="{{asset('menus')}}/theme_2/images/favicon.ico" type="image/x-icon"/>
        <link rel="apple-touch-icon" href="{{asset('menus')}}/theme_2/images/apple-touch-icon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('menus')}}/theme_2/css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="{{asset('menus')}}/theme_2/css/style2.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('menus')}}/theme_2/css/responsive.css">
        <!-- color -->
        <link id="changeable-colors" rel="stylesheet" href="{{asset('menus')}}/theme_2/css/colors/orange.css"/>

        <!-- Modernizer -->
        <script src="{{asset('menus')}}/theme_2/js/modernizer.js"></script>

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="images/ccafe.jpg" alt="" width="45px">
                                    </a>
                                </div>
                            </div>
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
    <!-- end site-header -->


    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                @foreach($categories as  $category)
                    @if($category->status == 1)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <h2 class="block-title text-center">
                                    {{$category->name}}
                                </h2>
                                <p class="title-caption text-center">Seçeneklerimize göz atın. </p>
                            </div>
                            <div class="tab-menu">
                                <div class="slider slider-nav">
                                    @foreach($category->subCategories as $key => $subCategory)
                                        @if($subCategory->status == 1)
                                            <div class="tab-title-menu">
                                                <h2>{{$subCategory->name}}</h2>
                                                <p><i class="flaticon-canape"></i></p>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="slider slider-single">
                                    @foreach($categories as  $category)
                                        @if($category->status == 1)
                                        @foreach($subCategory->products as $key2 => $product)
                                        @if($product->status == 1)
                                            <div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                                    <div class="offer-item">
                                                        <img src="{{asset($product->image)}}" alt=""
                                                             class="img-responsive">
                                                        <div>
                                                            <h3>{{$product->name}}</h3>
                                                            <p>
                                                                {{$product->description}}
                                                            </p>
                                                        </div>
                                                        <span class="offer-price">{{$product->price}}₺</span>
                                                    </div>
                                                </div><!-- end col -->
                                            </div>
                                        @endif
                                          @endforeach
                                        @endif
                                    @endforeach

                                </div>
                            </div><!-- end tab-menu -->
                        </div>
                @endif
            @endforeach

            <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->

    <div class="footer-box pad-top-70">
        <div class="container">
            <div class="row">
                <div class="footer-in-main">
                    <div class="footer-logo">
                        <div class="text-center">
                            <img src="{{asset('menus')}}/theme_2/images/ccafe.jpg" alt="" width="100px"/>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box-a">
                            <ul class="socials-box footer-socials pull-left">
                                <li>
                                    <a href="#">
                                        <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- end footer-box-a -->
                    </div>
                </div>
                <!-- end footer-in-main -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div id="copyright" class="copyright-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h6 class="copy-title"> Copyright &copy; 2020 <a href="https://albeyazilim.com" target="_blank">AlbeYazılım</a>
                            Tarafından Tasarlandı </h6>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end copyright-main -->
    </div>
    <!-- end footer-box -->

    <!-- ALL JS FILES -->
    <script src="{{asset('menus')}}/theme_2/js/all.js"></script>
    <script src="{{asset('menus')}}/theme_2/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('menus')}}/theme_2/js/custom.js"></script>
    </body>
@endif
</html>


