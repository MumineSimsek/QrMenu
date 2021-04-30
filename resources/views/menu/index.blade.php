<!DOCTYPE html>
<html lang="en">
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

                                <div class="row">
                                    @foreach($subCategory->products as $product)
@if($product->status == 1)
                                        {{--                                        @if($product->subCategory == $subCategory)--}}
                                        <div class="col-md-6 ftco-animate">
                                            <div class="media menu-item">

                                                <div class="media-body">
                                                    <img src="{{asset($product->image)}}" class="img-fluid">
                                                    <h5 class="mt-0">{{$product->name}}</h5>
                                                    <p style=" word-break: break-all">{{$product->description}}</p>
                                                    <h6 class="text-primary menu-price">{{$product->price}}₺</h6>
                                                </div>
                                            </div>

                                        </div>
                                        {{--                                        @endif--}}
                                        @endif
                                    @endforeach
                                </div>
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
</html>


