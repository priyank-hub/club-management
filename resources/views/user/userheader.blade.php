<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jan 2022 04:40:03 GMT -->

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Club</title>
    <!-- Favicon -->
    <link rel="icon" href="images/logo.jpeg">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ url('css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<body>
    <!-- start cssload-loader -->
    <div class="preloader" id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>

    <!-- end cssload-loader -->

    {{-- <a href="http://techydevs.com/demos/themes/html/trizen/rtl/index.html" class="rtl-btn">RTL Version</a> --}}

    <!-- ================================
            START HEADER AREA
================================= -->
    <header class="header-area">
        <div class="header-top-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="header-top-content">
                            <div class="header-left">
                                <ul class="list-items">
                                    <li><i class="la la-phone mr-1"></i>+91 7041249973</li>
                                    <li><i class="la la-envelope mr-1"></i>happyclub@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-top-content">
                            <div class="header-right d-flex align-items-center justify-content-end">
                                <div class="header-right-action">
                                    @if (session('membername'))
                                        <a href="{{ url('/userlogout') }}"
                                            class="theme-btn theme-btn-small">Logout</a>
                                    @else
                                        <a href="{{ url('/login') }}" class="theme-btn theme-btn-small">Login</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                            <div class="logo">
                                <img src="{{url('images/logo.jpeg')}}" height="80" width="100" alt="logo"></a>
                                {{-- <h4 style="font-display:initial color :blueviolet"><b>H</b>appy<b>C</b>lub</h4> --}}
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div><!-- end menu-toggler -->
                            </div><!-- end logo -->
                            <div class="main-menu-content">
                                <nav>
                                    <ul class="fill">
                                        <li>
                                            <a href="/home">Home </a>
                                        </li>
                                        <li>
                                            <a href="/eventshow">Events</i></a>
                                        </li>
                                        <li>
                                            <a href="/facilityshow">Facilities</i></a>
                                        </li>
                                        <li>
                                            <a href="/mstypedisplay">Membership</i></a>
                                        </li>
                                        <li>
                                            <a href="/rcshow">Rooms</i></a>
                                        </li>
                                        @if (session('membername'))
                                            <li>
                                                <a href="/bookings">Bookings</i></a>
                                            </li>
                                        @endif
                                        <li>
                                            <a href="/contactform">Contact Us</i></a>
                                        </li>
                                        <li>
                                            <a href="/aboutus">About Us</i></a>
                                        </li>
                                        <li>
                                            <a href="/crules">Terms & Condition</i></a>
                                        </li>
                                        <li>
                                            <a href="/faqshow">FAQ </a>
                                        </li>
                                        @if (session('membername'))
                                            <li>
                                                <a href="/review">FeedBack </a>
                                            </li>
                                        @endif
                                        <li></li>
                                    </ul>
                                </nav>
                            </div><!-- end main-menu-content -->
                            <div class="nav">
                                <div class="row">
                                    <div class="main-menu-content">
                                        @if (session('membername'))
                                            <a href="/profile">
                                        @endif
                                        @if (session('membername'))
                                            <img class="img-circle" src="{{ url('images/user.jpg') }}" height="40"
                                                width="40">
                                        @else
                                            <img class="img-circle" src="{{ url('images/user.jpg') }}" height="40"
                                                width="40">
                                        @endif
                                        <b><br> {{ session()->get('membername') }}</b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->



        </div><!-- end header-menu-wrapper -->
    </header>
    <!-- ================================
         END HEADER AREA
================================= -->

    <section class="content">
        <div class="container-fluid">
            @yield("content")
        </div>
    </section>
    <section class="footer-area section-bg padding-top-100px padding-bottom-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <div class="footer-logo padding-bottom-30px">
                            <img src="{{url('images/logo.jpeg')}}" height="80" width="100" alt="logo"></a>
                        </div>
                        <ul class="list-items pt-3">
                            <li>
                                G-47/48 Atlanta Paradise, Abhinandan Royale, Opp. Raj Empire Cinema, Vesu, Surat,
                                Gujarat, 395007
                            </li><br>
                            <li><b>Call us / WhatsApp us : </b></li>
                            <li>+91 70412 49973</li>
                            <li><b>Mail us on : </b></li>
                            <li>happyclub@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px"><b>Company</b></h4>
                        <ul class="list-items list--items">
                            <li><a href="/aboutus">About us</a></li><br>
                            <li><a href="/contactform">Contact Us</a></li><br>
                            <li><a href="/faqshow">FAQ</a></li><br>
                            <li><a href="/review">Feedback</a></li><br>
                            <li><a href="#">Terms & Conditions</a></li><br>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px"><b>Subscribe now</b></h4>
                        <p class="footer__desc pb-3">Subscribe for latest updates & promotions</p>
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="input-box">
                                    <label class="label-text">Enter email address</label>
                                    <div class="form-group mb-0">
                                        <span class="la la-envelope form-icon"></span>
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Email address">
                                        <button class="theme-btn theme-btn-small submit-btn" type="submit">Go</button>
                                        <span class="font-size-14 pt-1"><i class="la la-lock mr-1"></i>Your
                                            information is safe with us.</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px"><b>Reach out to us</b></h4>
                        <ul class="list-items list--items">
                            <li><a href="https://www.facebook.com/people/Clubies-Club/100078071786005/"><i
                                        class="lab la-facebook-f"></i> Facebook</a></li>
                            <li><a href="https://www.instagram.com/the_clubies/"><i class="lab la-instagram"></i>
                                    Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="term-box footer-item">
                        <ul class="list-items list--items d-flex align-items-center">
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-social-box text-right">
                        <ul class="social-profile">
                            {{-- <li><b>Our Links : </b></li> --}}
                            <li><a href="https://www.facebook.com/people/Clubies-Club/100078071786005/"><i
                                        class="lab la-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/the_clubies/"><i class="lab la-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
        <div class="section-block mt-4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            &copy; Copyright Trizen 2020. Made with
                            <span class="la la-heart"></span> by <a
                                href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                        </p>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px">
                        <h3 class="title font-size-15 pr-2">We Accept</h3>
                        <img src="{{ url('images/paypal2.png') }}" alt="" height="40" width="70">
                    </div><!-- end copy-right-content -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end footer-area -->
    <!-- ================================
       START FOOTER AREA
================================= -->

    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->

    <!-- end modal-shared -->
    {{-- <div class="modal-popup">
        <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                            <p class="font-size-14">Hello! Welcome Create a New Account</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="input-box">
                                    <label class="label-text">Username</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type your username">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Email Address</label>
                                    <div class="form-group">
                                        <span class="la la-envelope form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type your email">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Password</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type password">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Repeat Password</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type again password">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="button" class="theme-btn w-100">Register Account</button>
                                </div>
                                <div class="action-box text-center">
                                    <p class="font-size-14">Or Sign up Using</p>
                                    <ul class="social-profile py-3">
                                        <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a>
                                        </li>
                                        <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a>
                                        </li>
                                        <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end modal-popup --> --}}

    <!-- end modal-shared -->
    {{-- <div class="modal-popup">
        <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                            <p class="font-size-14">Hello! Welcome to your account</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="input-box">
                                    <label class="label-text">Username</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type your username">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Password</label>
                                    <div class="form-group mb-2">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type your password">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="custom-checkbox mb-0">
                                            <input type="checkbox" id="rememberchb">
                                            <label for="rememberchb">Remember me</label>
                                        </div>
                                        <p class="forgot-password">
                                            <a href="recover.html">Forgot Password?</a>
                                        </p>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="button" class="theme-btn w-100">Login Account</button>
                                </div>
                                <div class="action-box text-center">
                                    <p class="font-size-14">Or Login Using</p>
                                    <ul class="social-profile py-3">
                                        <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a>
                                        </li>
                                        <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a>
                                        </li>
                                        <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end modal-popup --> --}}

    <!-- Template JS Files -->
    <script src="{{ url('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('js/jquery-ui.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('js/moment.min.js') }}"></script>
    <script src="{{ url('js/daterangepicker.js') }}"></script>
    <script src="{{ url('js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ url('js/jquery.countTo.min.js') }}"></script>
    <script src="{{ url('js/animated-headline.js') }}"></script>
    <script src="{{ url('js/jquery.ripples-min.js') }}"></script>
    <script src="{{ url('js/quantity-input.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jan 2022 04:43:39 GMT -->
<style>
    /* li:hover a {
        box-sizing:initial;
        width: 100%;
        border: solid #4ff7fd 5px;
        border: solid #4ff7fd;
        padding: 2px;
        border-top: 2px;
        border-left: 2px;
        border-right: 2px;
        background-color: #4ff7fd;
        color: black;
    } */
    /* ul li a:hover:after {
        opacity: 1;
        visibility: visible;
        height: 200%;
    }

    ul li a:after {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        width: 100%;
        height: 1px;
        content: '.';
        color: transparent;
        background: #F1C40F;
        visibility: none;
        opacity: 0;
        z-index: -1;
    }

    ul li a:hover {
        color: #f8cb35;
    }

    ul li a {
        position: relative;
        z-index: 1;
    } */

    ul li a {
        position: relative;
    }

    ul li a:after {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        width: 0%;
        content: '.';
        color: transparent;
        background: rgb(7, 124, 233);
        height: 1px;
    }

    ul li a:hover:after {
        width: 100%;
    }

    ul li a {
        transition: all 2s;
    }

    ul li a:after {
        text-align: left;
        content: '.';
        margin: 0;
        opacity: 0;
    }

    ul li a:hover {
        color: #fff;
        z-index: 1;
    }

    ul li a:hover:after {
        z-index: -10;
        animation: fill 1s forwards;
        -webkit-animation: fill 1s forwards;
        -moz-animation: fill 1s forwards;
        opacity: 1;
    }


    @-webkit-keyframes circle {
        0% {
            width: 1px;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            height: 1px;
            z-index: -1;
            background: #eee;
            border-radius: 100%;
        }

        100% {
            background: #aaa;
            height: 5000%;
            width: 5000%;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            border-radius: 0;
        }
    }

    ul {
        list-style: none;
        /* text-align: center; */
    }

    ul li {
        display: inline-block;
    }

    ul li a {
        display: block;
        padding: 5px;
        /* text-decoration: none; */
        /* color: #aaa; */
        /* font-weight: 800; */
        /* text-transform: uppercase; */
        /* margin: 0 10px; */
    }

    ul li a,
    ul li a:after,
    ul li a:before {
        transition: all .5s;
    }

    ul li a:hover {
        color: #555;
    }

</style>

</html>