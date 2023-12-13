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
                                <h2 class="sec__title text-white">Success</h2>
                            </div>
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
    <br>
    <br>

    <div class="form-title-wrap">
        <div class="step-bar-wrap text-center">
            <ul class="step-bar-list d-flex align-items-center justify-content-around">
                <li class="step-bar flex-grow-1 step-bar-active">
                    <span class="icon-element">1</span>
                    <p class="pt-2 color-text-2">Room Confirmation</p>
                </li>
                <li class="step-bar flex-grow-1 step-bar-active">
                    <span class="icon-element">2</span>
                    <p class="pt-2 color-text-2">Your Booking &amp; Payment Details</p>
                </li>
                <li class="step-bar flex-grow-1 step-bar-active">
                    <span class="icon-element">3</span>
                    <p class="pt-2 color-text-2">Booking Completed!</p>
                </li>
            </ul>
        </div>
    </div>
    <br>
    <br>
    <div class="form-content">
        <div class="payment-received-list">
            <div class="d-flex align-items-center">
                <i class="la la-check icon-element flex-shrink-0 mr-3 ml-0"></i>
                <div>
                    <h3 class="title pb-1">Thanks {{ session()->get('membername') }}!</h3>
                    <h3 class="title">Your booking in {{ session()->get('bktype') }} room is confirmed.</h3>
                </div>
            </div>
            <ul class="list-items py-4">
                <li><i class="la la-check text-success mr-2"></i><strong class="text-black">The Clubies</strong> is
                    Expecting you on <strong class="text-black">{{ session()->get('bkcheckin') }}</strong></li><br>
                <li><i class="la la-check text-success mr-2"></i>Your <strong class="text-black">payment</strong> will
                    be handled by The Clubies, the <strong class="color-text-2">'Payment'</strong> section below has more
                    details</li>
            </ul>
            <h3 class="title"><a href="#" class="text-black">The Clubies</a></h3>
            <p><strong class="text-black mr-1">Phone:</strong>+91 7096034320</p>
            <ul class="list-items list-items-3 list-items-4 py-4">
                <li><span class="text-black font-weight-bold">Your reservation</span>{{ session()->get('sstpd') }} Days,
                    {{ session()->get('bknoofrooms') }} Rooms</li>
                <li><span class="text-black font-weight-bold">Check-in</span>{{ session()->get('bkcheckin') }}</li>
                <li><span class="text-black font-weight-bold">Check-out</span>{{ session()->get('bkcheckout') }}</li>
                <li><span class="text-black font-weight-bold">Payment</span>₹{{ session()->get('bktotalcharges') }}</li>
                <li><span class="text-black font-weight-bold">Cancellation cost</span>As per Rules</li>
            </ul>
            
            <button type="submit"><a class="btn btn-primary" href="{{url('/generatepdf')}}">Download PDF</a></button>
        </div><!-- end card-item -->
    </div>
@endsection