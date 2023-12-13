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
                                <h2 class="sec__title text-white">About Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="home">Home</a></li>
                                <li>About Us</li>
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
    <section class="about-area padding-bottom-90px overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading margin-bottom-40px">
                        <h2 class="sec__title">About Us</h2><br>
                        <p class="sec__desc font-size-16 pb-3">"What is the club on any case?Not the building or the Directors or the people who are paid to repesent it.
                            It's not the television contracts,get-out clauses,marketing departments or executive boxes.It's the noise, the passion, the feelings of belonging, the pride in your city."
                        </p>
                        <p class="sec__desc font-size-16 pb-3">That's why our founder decided to inaugrate a club where people can have the great enjoyement.In 1989 we are come up with club's idea where everyone can have the best of their life.
                            after a good thought we decided a name "THE CLUBIES".Which specifies our goal very well.and now we are great dealing club in all over India.
                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-5 ml-auto">
                    <div class="image-box about-img-box">
                        <img src="images/team.jpg" alt="about-img" class="img_item img_item-1">
                        {{-- <img src="images/pro_team.jpg" alt="about-img" class="img_item img_item-2"> --}}
                    </div>
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>



    <section class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="sec__title">Our Dedicated Team</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
                <div class="row padding-top-100px">
            @foreach ($au as $item)

                    <div class="col-lg-4 responsive-column">
                        <div class="card-item team-card">
                            <div class="card-img">
                                <img src="/storage/{{ $item->photo }}">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">{{ $item->name }}</h3>
                                <p class="card-meta">{{ $item->post }}</p>
                                <p class="card-text font-size-15 pt-2">
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-4 -->
            @endforeach
                </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection