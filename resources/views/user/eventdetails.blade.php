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
                                <h2 class="sec__title text-white">Event Grid</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="home">Home</a></li>
                                <li>Event</li>
                                <!-- <li>Event Grid</li>-->
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
    <div class="single-content-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content-wrap padding-top-60px">
                        <div id="description" class="page-scroll">
                            <div class="single-content-item pb-4">
                                <h3 class="title font-size-26">{{ $event->eventname }}</h3>
                            </div><!-- end single-content-item -->
                            {{-- <div class="section-block"></div> --}}
                            <div class="single-content-item py-4">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-clock-o"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Duration</h3>
                                                <span class="font-size-13">
                                                    {{ date_diff(new \DateTime($event->fromdate), new \DateTime($event->todate))->format('%d days') }}
                                                </span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-users"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Group Size</h3>
                                                <span class="font-size-13">10 People</span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->

                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-calendar"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Date</h3>
                                                <span class="font-size-13">{{ $event->fromdate }} -
                                                    {{ $event->todate }}</span>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                </div>
                            </div>
                            <div class="section-block"></div>
                            <div class="single-content-item padding-top-40px padding-bottom-40px">
                                <h3 class="title font-size-20">Description</h3>
                                <p class="py-3">{{ $event->description }}</p>
                                <h3 class="title font-size-15 font-weight-medium pb-3">Safety Points</h3>
                                <div class="row">
                                    <div class="col-lg-6 responsive-column">
                                        <ul class="list-items pb-3">
                                            <li><i class="la la-dot-circle text-color mr-2"></i>Wear mask</li><br>
                                            <li><i class="la la-dot-circle text-color mr-2"></i>Social distance</li><br>
                                            <li><i class="la la-dot-circle text-color mr-2"></i>Sanitization</li><br>
                                        </ul>
                                    </div>

                                </div><!-- end row -->
                                <div class="row">
                                    <div class="col-lg-6 responsive-column">
                                        <h3 class="title font-size-15 font-weight-medium pb-3">Included</h3>
                                        <ul class="list-items">
                                            <li><i class="la la-check text-success mr-2"></i>Food</li><br>
                                            <li><i class="la la-check text-success mr-2"></i>Local Transportation</li><br>
                                            <li><i class="la la-check text-success mr-2"></i>Accommodation</li><br>
                                            <li><i class="la la-check text-success mr-2"></i>Entrance Fees</li><br>

                                        </ul>
                                    </div>
                                    <div class="col-lg-6 responsive-column">
                                        <h3 class="title font-size-15 font-weight-medium pb-3">Not Allowed</h3>
                                        <ul class="list-items">
                                            <li><i class="la la-times text-danger mr-2"></i>Alcoholic drinks</li><br>
                                            <li><i class="la la-times text-danger mr-2"></i>Smoking</li><br>
                                            <li><i class="la la-times text-danger mr-2"></i>Pets</li><br>
                                            <li><i class="la la-times text-danger mr-2"></i>Packed Food</li><br>
                                        </ul>
                                    </div>
                                    <div>
                                        <form action="{{ url('/etbook') }}">
                                            <!-- <a href="{{ url('userlogin') }}" class="d-block"> -->
                                            <br><button type="submit" class="theme-btn">Book Event</button>
                                        </form>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end description -->
                    </div><!-- end single-content-item -->
                </div><!-- end review-box -->
            </div><!-- end single-content-wrap -->
        </div><!-- end col-lg-8 -->

    </div><!-- end row -->
    </div><!-- end container -->
    </div>
@endsection
