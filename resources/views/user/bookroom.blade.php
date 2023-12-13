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
                                <h2 class="sec__title text-white">Book Room</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="home">Home</a></li>
                                <li><a href="rcshow">Room</a></li>
                                <li>Room Booking</li>
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
    <div class="form-title-wrap">
        <div class="step-bar-wrap text-center">
            <ul class="step-bar-list d-flex align-items-center justify-content-around">
                <li class="step-bar flex-grow-1 step-bar-active">
                    <span class="icon-element step-bar-active">1</span>
                    <p class="pt-2 color-text-2">Book Room</p>
                </li>
                <li class="step-bar flex-grow-1">
                    <span class="icon-element">2</span>
                    <p class="pt-2 color-text-2">Room Confirmation</p>
                </li>
                <li class="step-bar flex-grow-1">
                    <span class="icon-element">3</span>
                    <p class="pt-2 color-text-2">Booking Completed!</p>
                </li>
            </ul>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-8">

            <div class="sidebar-widget single-content-widget">
                <form name="roombook" action="{{ url('/roomstore') }}" method="post">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your Reservation</h3>
                    <div class="sidebar-widget-item">
                        <div class="contact-form-action">
                            <input type="hidden" value="{{ $rc->id }}" name="roomid" class="form-control"
                                id="roomid">
                            <input type="hidden" value="{{ $rc->roomtype }}" name="roomtype" class="form-control"
                                id="roomtype">
                            <input type="hidden" value="{{ $rc->charges }}" name="pdcharges" class="form-control"
                                id="pdcharges">

                            <!-- <div class="input-box"><br>
                                    <label class="label-text">Room</label>
                                    <div class="form-group">
                                        <span class="title font-size-20">{{ $rc->roomtype }}</span>
                                    </div>
                                </div> -->
                            <div class="input-box"><br>
                                <label class="label-text">Check-in</label>
                                <div class="form-group">
                                    <span class="la la-calendar form-icon"></span>
                                    <!-- <input class="date-range form-control" type="text" name="daterange-single"> -->
                                    <input type="date" name="checkin" class="form-control" id="checkin" required="">
                                </div>
                            </div>
                            <div class="input-box">
                                <label class="label-text">Check-out</label>
                                <div class="form-group">
                                    <span class="la la-calendar form-icon"></span>
                                    <!-- <input class="date-range form-control" type="text" name="daterange-single" > -->
                                    <input type="date" name="checkout" class="form-control" id="checkout" required="">
                                </div>
                            </div>
                            <div class="input-box">
                                <label class="label-text">Rooms</label>
                                <div class="form-group">
                                    <div class="select-contain w-auto">
                                        <div class="dropdown bootstrap-select select-contain-select">
                                            <select class="select-contain-select" name="noofrooms" tabindex="-98">
                                                <option value="1" selected="">1 Room</option><br>
                                                <option value="2">2 Rooms</option><br>
                                                <option value="3">3 Rooms</option><br>
                                                <option value="4">4 Rooms</option><br>
                                                <option value="5">5 Rooms</option><br>
                                                <option value="6">6 Rooms</option><br>
                                                <option value="7">7 Rooms</option><br>
                                                <option value="8">8 Rooms</option><br>
                                                <option value="9">9 Rooms</option><br>
                                                <option value="10">10 Rooms</option><br>
                                                <option value="11">11 Rooms</option><br>
                                                <option value="12">12 Rooms</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->

                        </div>
                    </div><!-- end sidebar-widget-item -->
                    <div class="sidebar-widget-item">
                        <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                            <label class="font-size-16">Adults <span>Age 18+</span></label>
                            <div class="qtyBtn d-flex align-items-center">
                                <div class="qtyDec">
                                    <i class="la la-minus"></i>
                                </div>
                                <input type="text" name="adults" value="1">
                                <div class="qtyInc">
                                    <i class="la la-plus"></i>
                                </div>
                            </div>
                        </div><!-- end qty-box -->
                        <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                            <label class="font-size-16">Children <span>5-17 years old</span></label>
                            <div class="qtyBtn d-flex align-items-center">
                                <div class="qtyDec">
                                    <i class="la la-minus"></i>
                                </div>
                                <input type="text" name="children" value="0">
                                <div class="qtyInc">
                                    <i class="la la-plus"></i>
                                </div>
                            </div>
                        </div><!-- end qty-box -->
                        <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                            <label class="font-size-16">Infants <span>0-4 years old</span></label>
                            <div class="qtyBtn d-flex align-items-center">
                                <div class="qtyDec">
                                    <i class="la la-minus"></i>
                                </div>
                                <input type="text" name="infants" value="0">
                                <div class="qtyInc">
                                    <i class="la la-plus"></i>
                                </div>
                            </div>
                        </div><!-- end qty-box -->
                    </div><!-- end sidebar-widget-item -->
                    <div class="sidebar-widget-item py-4">
                        <h3 class="title">Extra Services</h3>
                        <div class="extra-service-wrap">
                            <!-- <form action="#" method="post" class="extraServiceForm" id="extraServiceForm"> -->
                            <div id="checkboxContainPrice">
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="breakfast" id="breakfastChb" value="100.00">
                                    <label for="breakfastChb"
                                        class="d-flex justify-content-between align-items-center">Breakfast <span
                                            class="text-black font-weight-regular">₹100/ per Person</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="dinner" id="dinnerChb" value="300.00">
                                    <label for="dinnerChb" class="d-flex justify-content-between align-items-center">Dinner
                                        <span class="text-black font-weight-regular">₹300/ per Person</span></label>
                                </div>
                            </div>
                            <div>
                                <p style="color:red">
                                    * 12% GST included in Total Amount.
                                </p>
                            </div>
                            <!-- <div class="total-price pt-3">
                                                <p class="text-black">Your Price</p>
                                                <p class="d-flex align-items-center"><span class="font-size-17 text-black">₹</span> <input type="text" name="total" class="num" value="80.00" readonly="readonly"><span>/ per room</span></p>
                                            </div> -->
                            <!-- </form> -->
                        </div>
                        <!-- <form action="{{ url('/roomstore') }}"> -->
                        <div class="btn-box">
                            <button type="submit" class="theme-btn">Pay Now</button>
                        </div>
                        <!-- </form> -->
                    </div><!-- end sidebar-widget-item -->

                </form>
            </div><!-- end sidebar-widget -->

        </div>
        <!--end col-->
        <div class="col-lg-4">
            <!-- <form method="get"> -->
            <div class="input-box">
                <div class="form-group">
                    <img width="400" height="400" src="/storage/{{ $rc->photo1 }}" alt="Destination-img"
                        style="align:left">
                </div>
            </div><br>
            <div class="input-box">
                <div class="form-group">
                    <span class="title font-size-20">{{ $rc->roomtype }}</span>
                </div>
            </div>
            <div class="input-box">
                <div class="form-group">
                    <span class="title font-size-20">₹{{ $rc->charges }} /- per Room</span>
                </div>
            </div>
            <hr>
            <div class="input-box">
                <div class="form-group">
                    <span style="color: red" class="title font-size-16"><b><u>Cancellation Rules :: </b></u></span>
                </div>
            </div>
            @foreach ($crule as $item)
            <div class="input-box">
                <div class="form-group">
                    <li>{{$item->rules}}
                </div>
            </div>    
            @endforeach
            
            <!-- </form> -->
        </div>
        <!--end col-lg-4 -->
    </div>
    <!--end row-->
@endsection 