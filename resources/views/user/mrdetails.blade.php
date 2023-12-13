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
    <div class="table-form table-responsive mb-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Details</th>
                    <th scope="col">Status</th>
                    <th scope="col">Per Day Charges</th>
                    <th scope="col">Total Charges</th>
                    <th></th>
                    <!-- <th scope="col">Per Day Charges</th>
                                                        <th scope="col">Total Charges</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach ($bk as $item)
                    <tr>
                        <th scope="row">
                            <div class="table-content product-content d-flex align-items-center">
                                <div class="product-content">
                                    <a class="title">{{ $item->roomtype }}</a>
                                    <div class="product-info-wrap">
                                        <div class="product-info line-height-24">
                                            <span class="product-info-label">Reservation:</span>
                                            <span class="product-info-value">
                                                <span class="product-check-in">{{ $item->checkin }}</span>
                                                <span class="product-mark"><b> To </b></span>
                                                <span class="product-check-out">{{ $item->checkout }}</span>
                                                <!-- <span class="product-nights"> Days</span> -->
                                            </span>
                                        </div><!-- end product-info -->
                                        <div class="product-info line-height-24">
                                            <span class="product-info-label">Guests:</span>
                                            <span class="product-info-value">{{ $item->adults }} Adults,
                                                {{ $item->children }} Children,
                                                {{ $item->infants }} Infants</span>
                                        </div><!-- end product-info -->
                                        <div class="product-info line-height-24">
                                            <span class="product-info-label">Extra Services:</span>
                                            <span class="product-info-value">{{ $item->extrafacility }}</span>
                                        </div><!-- end product-info -->
                                    </div>
                                </div>
                            </div>
                        </th>
                        <td>{{ $item->status }}</td>
                        <td>₹{{ $item->pdcharges }}</td>
                        <!-- <td>
                                                        <div class="product-info">
                                                            <input type="text" class="form-control" value="1">
                                                        </div>
                                                    </td> -->
                        <td>₹{{ $item->totalcharges }}</td>
                        {{-- <td>
                                    <button type="submit" class="btn btn-block btn-outline-danger">Cancellation</button>
                                </td> --}}
                        @if ($item->status == 'Booked')
                            @if ($item->checkin >= $tdate)
                                <td>
                                    <a href="{{ url('cancellation/'.$item->id) }}"><i class="far fa-edit"></i>
                                        <button type="submit" class="btn btn-block btn-outline-danger">Cancellation</button>
                                    </a>
                                </td>
                            @endif
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection