<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('blog/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('blog/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('blog/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- header-start -->
    <header>
    <div class="header-area ">
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-md-4 d-none d-md-block">
                        <div class="header_links ">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="twiter" href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="insta" href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="logo">
                            <a href="#">
                                <img src="{{asset('blog/img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 d-none d-md-block">
                        <div class="login_resiter">
                            @if(Route::has('login'))
                                @auth
                                    <a href="#">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                                @else
                                    <p><a href="{{route('login')}}"><i class="fa fa-user"></i>login</a>

                                    @if (Route::has('register'))
                                            | <a href="{{route('register')}}">Register</a></p>
                                    @endif
                                @endauth
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area white-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="#">Home</a></li>
                                    <li><a href="#">category <i class="fa fa-caret-down"></i></a>
                                        <ul class="submenu">
                                            @foreach($categories as $category)
                                            <li><a href="#">{{$category->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">pages <i class="fa fa-caret-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="#">elements</a></li>
                                            <li><a href="#">single-blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="get_serch">
                            <a id="search_1" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="search_input" id="search_input_box">
                    <div class="container ">
                        <form class="d-flex justify-content-between search-inner">
                            <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                            <button type="submit" class="btn"></button>
                            <span class="fa fa-times-circle" id="close_search" title="Close Search"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->

<!-- welcome_protomedia_start -->
<div class="welcome_protomedia">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <h3>Welcome to Photomedia <br>
                    photography blog</h3>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="add_here">
                    <a href="#">
                        <img src="{{asset('blog/img/add/add.jpg')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- welcome_protomedia_end -->

<!-- photographi_area_start -->
<div class="photographi_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="single_photography photography_bg_1">
                    <div class="info">
                        <div class="info_inner">
                            <h3><a href="#">Essential Photography: Back <br>
                                    Button Focus</a></h3>
                            <div class="date_catagory d-flex align-items-center justify-content-between">
                                <span>12 jun 2019</span>
                                <span class="catagory">lightroom</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="single_photography photography_bg_2">
                    <div class="info">
                        <div class="info_inner">
                            <h3><a href="#">Think Tank Photo Retrospective <br>
                                    Shoulder</a></h3>
                            <div class="date_catagory d-flex align-items-center justify-content-between">
                                <span>12 jun 2019</span>
                                <span class="catagory">lightroom</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- photographi_area_end -->

<!-- photography_slider_area_start -->

<!-- photography_slider_area_end -->

<!-- most_recent_blog_start -->
<div class="most_recent_blog">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-33">
                    <h3>Most Recent</h3>
                </div>
            </div>
            <div class="col-xl-8 col-md-8">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-xl-6 col-md-6">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="#">
                                    <img src="{{asset('storage/'.$post->image)}}" width="350px" height="260px" alt="">
                                </a>
                            </div>
                            <div class="blog_meta">
                                <p>
                                   {{$post->created_at->diffForHumans()}}
                                </p>
                                <h3><a href="#">
                                        {{$post->title}}
                                    </a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-xl-12">
                        <div class="btn_area text-center">
                            <a href="#" class="boxed-btn">Load More</a>
                        </div>
                    </div>
                </div>
                {{ $posts->appends(request()->query())}}
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="blog_right_side">
                    <div class="section_title mb-33">
                        <h3>Follow Us</h3>
                    </div>
                    <div class="foollow_links">
                        <ul class="d-flex align-items-center justify-content-between">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>

                                    <p>followers</p>
                                </a>
                            </li>
                            <li>
                                <a class="insta" href="#">
                                    <i class="fa fa-instagram"></i>

                                    <p>followers</p>
                                </a>
                            </li>
                            <li>
                                <a class="twitter" href="#">
                                    <i class="fa fa-twitter"></i>

                                    <p>followers</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="add_here text-center">
                        <a href="#">
                            <img src="{{asset('blog/img/most_recent/googleAdd.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="section_title mb-33">
                        <h3>Tags</h3>
                    </div>
                    <div class="tags">
                        <ul>
                            @foreach($categories as $category)
                            <li><a href="#">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- most_recent_blog_end -->

<!-- photo_gallery_start -->

<!-- photo_gallery_end -->

<!-- subscribe_newsletter_start -->

<!-- subscribe_newsletter_end -->

<!-- instagram_media_area_start -->

<!-- instagram_media_area_end -->

<!-- footer_start -->
<footer class="footer">
    <div class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer_info text-center">
                        <div class="footer_logo text-center">
                            <a href="#">
                                <img src="{{asset('blog/img/footer-logo.png')}}" alt="">
                            </a>
                        </div>
                        <p class="footer_text">
                            Explore photo media blog to enrich your photography knowledge
                        </p>
                        <div class="header_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="twiter" href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="insta" href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom ">
        <div class="container">
            <div class="footer_border">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="footer_links text-center">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="#">category</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_text text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </p>
        </div>
    </div>
</footer>
<!-- footer_end -->


<!-- JS here -->
<script src="{{asset('blog/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('blog/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('blog/js/popper.min.js')}}"></script>
<script src="{{asset('blog/js/bootstrap.min.js')}}"></script>
<script src="{{asset('blog/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('blog/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('blog/js/ajax-form.js')}}"></script>
<script src="{{asset('blog/js/waypoints.min.js')}}"></script>
<script src="{{asset('blog/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('blog/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('blog/js/scrollIt.js')}}"></script>
<script src="{{asset('blog/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('blog/js/wow.min.js')}}"></script>
<script src="{{asset('blog/js/nice-select.min.js')}}"></script>
<script src="{{asset('blog/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('blog/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('blog/js/plugins.js')}}"></script>

<!--contact js-->
<script src="{{asset('blog/js/contact.js')}}"></script>
<script src="{{asset('blog/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('blog/js/jquery.form.js')}}"></script>
<script src="{{asset('blog/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('blog/js/mail-script.js')}}"></script>

<script src="{{asset('blog/js/main.js')}}"></script>

</body>
</html>
