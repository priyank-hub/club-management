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
                                <h2 class="sec__title text-white">My Bookings</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="home">Home</a></li>
                                <li>My Bookings</li>
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

    <h2 style="color: rgb(23, 84, 228)"><i>Room Bookings</i></h2><br>
    @foreach ($bk as $item)
        <div class="cabin-type-item seat-selection-item d-flex">
            <div class="cabin-type-img flex-shrink-0">
                @if ($item->roomtype == 'Superior')
                    <img src="images/superior2.jpg" alt="">
                @elseif($item->roomtype == 'Standard')
                    <img src="images/standard3.jpg" alt="">
                @elseif($item->roomtype == 'Super Deluxe')
                    <img src="images/superdelux1.jpg" alt="">
                @elseif($item->roomtype == 'Delux')
                    <img src="images/delux1.jpg" alt="">
                @elseif($item->roomtype == 'Semi Deluxe')
                    <img src="images/semidelux2.jpg" alt="">
                @elseif($item->roomtype == 'Executive Room')
                    <img src="images/d11.png" alt="">    
                @endif
            </div>
            <div class="cabin-type-detail">
                <h3 class="title">{{ $item->roomtype }}</h3>
                <p class="font-size-15 pt-2">Check-in : {{ $item->checkin }}</p>
            </div>
            <div class="cabin-price text-center">
                <p class="text-uppercase font-size-14">
                    Price
                    <strong class="mt-n1 text-black font-size-18 d-block">
                        ₹{{ $item->totalcharges }}
                    </strong>
                </p>
                <div class="custom-checkbox mb-0">
                    <a href="{{ url('mrdetails/' . $item->id) }}" class="d-block">
                        <button type="submit" class="btn btn-block btn-outline-primary">Show All Details</button>
                    </a>
                </div>
            </div>
        </div><br>
    @endforeach

    <h2 style="color: rgb(23, 84, 228)"><i>Event Bookings</i></h2><br>
    @foreach ($event as $item)
        <br>
        <div class="cabin-type-item seat-selection-item d-flex">
            <div class="cabin-type-img flex-shrink-0">
                <img src='/storage/{{ $item->photo }}' alt="">
            </div>
            <div class="cabin-type-detail">
                <h3 class="title">{{ $item->eventname }}</h3>
                <p class="font-size-15 pt-2">Start Date : {{ $item->fromdate }}</p>
                <p class="font-size-15 pt-2">Start Time : {{ $item->starttime }}</p>
            </div>
            <div class="cabin-price text-center">
                <p class="text-uppercase font-size-14">
                    No. of Members
                    <strong class="mt-n1 text-black font-size-18 d-block">
                        {{ $item->noofmember }}
                    </strong>
                </p>
            </div>
        </div><br>
    @endforeach
@endsection