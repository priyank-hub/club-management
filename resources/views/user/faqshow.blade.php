@extends("user.userheader")
@section('content')
    <!-- ================================
                                                START BREADCRUMB AREA
                                                ================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">FAQ</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="home">Home</a></li>
                                <li>FAQ</li>
                                <!--<li>Facility Grid</li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div>
    </section>
    <!-- ================================
                                                    END BREADCRUMB AREA
                                                ================================= -->
    <br><br>
    <div class="row">
        <div class="col-lg-8">
            <div class="faq-item mb-5">
                {{-- <h3 style="">Find Your Solution</h3> --}}
                <h3 style="color:black">Find Your Solution</h3>
                <br>
                @foreach ($faq as $item)
                    <ul class="toggle-menu list-items list-items-flush pt-4">
                        <li>
                            <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                {{ $item->question }}
                                <i class="la la-angle-down"></i>
                            </a>
                            <ul class="toggle-drop-menu pt-2">
                                <li class="line-height-26">{{ $item->answer }}</li>
                            </ul>
                        </li>
                    </ul>
                @endforeach

            </div><!-- end faq-item -->

        </div>
        <div class="col-lg-4">
            <div class="carousel__item">
                <div class="ScrollStyle">
                    <div class="sidebar-widget">
                        <div class="slider">
                            <div class="slide-track">
                                <div class="slide">
                                    <img src="{{ url('images/img7.jpg') }}" height="250" width="500" alt="" />
                                    <img src="{{ url('images/img1.jpg') }}" height="250" width="500" alt="" />
                                    <img src="{{ url('images/holi1.jpg') }}" height="250" width="500" alt="" />
                                    <img src="{{ url('images/food-court-interiors.jpg') }}" height="250" width="500"
                                        alt="" />
                                    <img src="{{ url('images/party.jpg') }}" height="250" width="500" alt="" />
                                    <img src="{{ url('images/Massage-2.jpg') }}" height="250" width="500" alt="" />
                                    <img src="{{ url('images/Massage-2.jpg') }}" height="250" width="500" alt="" />
                                    <img />
                                    <img />
                                    <img />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            @-webkit-keyframes scroll {
                0% {
                    -webkit-transform: translateY(0%);
                    transform: translateY(100%);
                }

                100% {
                    -webkit-transform: translateY(calc(-250px * 7));
                    transform: translateY(-100%);
                }
            }

            @keyframes scroll {
                0% {
                    -webkit-transform: translateY(0);
                    transform: translateY(100%);
                }

                100% {
                    -webkit-transform: translateY(calc(-250px * 7));
                    transform: translateY(-100%);
                }
            }

            .slider {
                background: pr;
                box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
                height: 250;
                margin: 500;
                overflow: hidden;
                position: relative;

            }

            .slider::before,
            .slider::after {
                /* content: ""; */
                height: 100%;
                width: 200px;
                position: absolute;
                z-index: 2;
            }

            .slider::after {
                right: 0;
                top: 0;
                -webkit-transform: rotateZ(360deg);
                transform: rotateZ(360deg);
            }

            .slider::before {
                left: 0;
                top: 0;
            }

            .slider .slide-track {
                -webkit-animation: scroll 10s linear infinite;
                animation: scroll 10s infinite;
                display: flex;
                width: calc(250px * 14);
            }

            .slider .slide {
                height: 500px;
                width: 500px;
            }

            /* .carousel__item {
                    display: flex;
                    align-items: center;
                    position: absolute;
                    top: 50%;
                    width: 50%;
                    height: 50%;
                    padding: 0 12px;
                    opacity: 0;
                    filter: drop-shadow(0 2px 2px #555);
                    will-change: transform, opacity;
                    animation: carousel-animate-vertical $animation-timing linear infinite;
                    animation-duration: 4s;
                } */

        </style>
    @endsection
