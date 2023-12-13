@extends("user.userheader")
@section("content")

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
                            <h2 class="sec__title text-white">Room Confirmation</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="home">Home</a></li>
                            <li><a href="rcshow">Room Charges</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div>
</section>
<!-- ================================
    END BREADCRUMB AREA
================================= -->
<br>







<section class="payment-area section-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-box payment-received-wrap mb-0">
                    <div class="form-title-wrap">
                        <div class="step-bar-wrap text-center">
                            <ul class="step-bar-list d-flex align-items-center justify-content-around">
                                <li class="step-bar flex-grow-1 step-bar-active">
                                    <span class="icon-element">1</span>
                                    <p class="pt-2 color-text-2">Book Room</p>
                                </li>
                                <li class="step-bar flex-grow-1 step-bar-active">
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
                    <section class="cart-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="cart-wrap">
                    <div class="table-form table-responsive mb-3">
                        <table class="table">
                            <tbody>
                                <tr>
                                <!-- <th scope="row"> -->
                                    <div>
                                        <img width="400" height="400" src="/storage/{{$rc->photo1}}" alt="Destination-img" style="align:left"> 
                                        </a>
                                        <br><br>
                                       <div class="product-content">
                                           <b><a class="title">{{session()->get('bktype')}}</a></b>
                                           <div class="product-info-wrap">
                                               <div class="product-info line-height-24">
                                                   <span class="product-info-label">Reservation:</span>
                                                       <span class="product-info-value">
                                                       <span class="product-check-in">{{session()->get('bkcheckin')}}</span>
                                                       <span class="product-mark">/</span>
                                                       <span class="product-check-out">{{session()->get('bkcheckout')}}</span>
                                                    </span>
                                               </div><!-- end product-info -->
                                               <div class="product-info line-height-24">
                                                   <span class="product-info-label">Guests:</span>
                                                   <span class="product-info-value">{{session()->get('bkadults')}}</span>
                                               </div><!-- end product-info -->
                                               <div class="product-info line-height-24">
                                                   <span class="product-info-label">Extra Services:</span>
                                                   <span class="product-info-value">{{session()->get('bkextrafacility')}}</span>
                                               </div><!-- end product-info -->
                                           </div>
                                       </div>
                                    </div>
                                    <div class="btn-box text-right pt-4">
                                        <!-- <a href="roomcheckout.html" class="theme-btn">Proceed to Checkout</a> -->
                                        <div>
                                            <form action="{{url('/checkout')}}">
                                                <div>
                                                    <button type="submit" class="theme-btn">Proceed to Checkout</button>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                <!-- <div class="section-block"></div> -->
                                <!-- </div> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- end cart-wrap -->
            </div><!-- end col-lg-12 -->
            <div class="col-lg-6">
                <div class="cart-totals table-form">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="table-content">
                                        <h3 class="title">Extra Bed Charges</h3>
                                    </div>
                                </th>
                                <td>₹{{session()->get('bkextrabed')}}</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="table-content">
                                        <h3 class="title">Extra Charges</h3>
                                    </div>
                                </th>
                                <td>₹{{session()->get('bkextracharges')}}</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="table-content">
                                        <h3 class="title">Per Day Charges</h3>
                                    </div>
                                </th>
                                <td>₹{{session()->get('bkpdcharges')}}</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="table-content">
                                        <h3 class="title">Total</h3>
                                    </div>
                                </th>
                                <td>₹{{session()->get('bktotalcharges')}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><!--end col-lg-6-->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection