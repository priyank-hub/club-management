@extends("user.userheader")
@section('content')
    <section class="hero-wrapper">
        <div class="hero-box hero-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h5 class="sec__title cd-headline zoom">
                            With HAPPY CLUB
                            <span class="cd-words-wrapper" style="width: 350.25px;">
                                <!-- <b class="is-visible">Meet</b> -->
                                <b class="is-hidden">Share</b>
                                <b class="is-visible">Enjoy</b>
                            </span>
                            {{-- Waiting for You --}}
                        </h5>
                    </div>
                    <!-- <div class="col-lg-4">
                        <div class="sidebar-widget">
                            <h2 class="title" style="color:white">Covid Protocol</h2>
                            <ul class="list-items list-items-flush">
                                <li><span class="text-white mr-2">Keep Social Distancing</span></li><br>
                                <li><span class="text-white mr-2">Wear Mask</span></li><br>
                                <li><span class="text-white mr-2">Sanitizer</span></li><br>
                                <li><span class="text-white mr-2">Members Should Fully Vaccinated</span></li><br>
                                <li><span class="text-white mr-2">Clean your hands</span></li><br>
                                <li><span class="text-white mr-2">Clean and disinfect</span></li><br>
                                <li><span class="text-white mr-2">Monitor your health daily</span></li><br>
                                <li><span class="text-white mr-2">Take precautions when you travel</span></li><br>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
            <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
            </svg>
        </div>
        <br>
        <section class="club_mahindra_exp">
            <div class="container">
                <div class="row exp_block">
                    <div class="col-6">
                        <div class="exp_inner">
                            <figure>
                                <a href="{{url('eventshow')}}">
                                    <img width="500" height="300" src="images/eventhome.jpeg"> </a>
                            </figure>
                        </div>
                    </div>
                    <br>
                    <div class="col-6">
                        <div class="exp_inner">
                            <figure>
                                <a href="{{url('facilityshow')}}">
                                    <img width="500" height="300" src="images/facilityhome.jpeg"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="exp_inner">
                            <figure>
                                <a href="{{url('rcshow')}}">
                                    <img width="500" height="300" src="images/roomhome.jpeg"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="exp_inner">
                            <figure>
                                <a href="{{url('mstypedisplay')}}">
                                    <img width="500" height="300" src="images/memberhome.jpeg"></a>
                            </figure>
                        </div>
                    </div>

                </div>

                {{-- <div class="row justify-content-center join_club_sec"><a class="btn-primary join_the_club_btn"
                        href="#lead_form">JOIN THE CLUB</a></div>
            </div> --}}
        </section>
    </section>
    <style>
        h5 {
            color: white;
            font-family: 'Times New Roman', Times, serif;
        }

    </style>
@endsection