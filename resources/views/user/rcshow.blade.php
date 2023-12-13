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
                            <h2 class="sec__title text-white">Room Charges Grid</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="home">Home</a></li>
                            <li>Room Charges</li>
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
<div class="row">
    <div class="col-lg-12">
        @foreach($rc as $item)
            <div class="card-item card-item-list ">
                <div class="card-img">
                    <a href="{{url('rcdetail/'.$item->id)}}" class="d-block">
                        <img src="/storage/{{$item->photo1}}">            
                    </a>
                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for Later">
                        <i class="la la-heart-o"></i>
                    </div>
                </div>
                <div class="card-body">
                    
                    <h3 class="card-title">{{$item->roomtype}}</h3>
                    
                        <span>{{$item->description}}</span>
                    
                    <div class="card-price d-flex align-items-center justify-content-between">
                        <p>
                            <span class="price__num">₹{{$item->charges}}</span>
                        </p>
                    </div>
                    <div class="card-btn">
                        <a href="{{url('rcdetail/'.$item->id)}}" class="theme-btn theme-btn-transparent">Book Now</a>
                    </div>
                </div>               
            </div>
        @endforeach
    </div>
</div>



@endsection