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
                            <h2 class="sec__title text-white">Event Grid</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="home">Home</a></li>
                            <li>Event</li>
                            <!--<li>Facility Grid</li>-->
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

<section class="card-area section--padding">
    <div class="container">
        <div class="row">
            @foreach($event as $item)
            <div class="col-lg-4 responsive-column">
                <div class="card-item">
                    <div class="card-img">
                        <a href="{{url('detail/'.$item->id)}}" class="d-block">
                            <img width="100" height="300" src="/storage/{{$item->photo}}" alt="Destination-img"> 
                        </a>
                        {{-- <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for Later">
                            <i class="la la-heart-o"></i>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="{{url('detail/'.$item->id)}}">{{$item->eventname}}</a></h3>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__num">₹{{$item->charges}}</span>
                            </p>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            @endforeach
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection