@extends("user.userheader")
@section('content')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

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
                                <h2 class="sec__title text-white">Login</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="home">Home</a></li>
                                <li>Login</li>
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
    {{-- <div class="center">
        <div class="sidebar-widget single-content-widget">
            <!-- <h3>User Login</h3> -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Member Profile</h3>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card-item user-card card-item-list mt-4 mb-0">
                        <div>
                            <br><br><br>
                            <img src="/images/profile.jpg" height="200" width="200" alt="">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between pt-3">
                                <ul class="list-items ">
                                    <li>
                                        <span class="la la-user form-icon">Name : </span>
                                        {{ $ms->membername }}
                                    </li><br>
                                    <li>
                                        <span class="la la-map form-icon">Address : </span>
                                        {{ $ms->address }} , {{ $ms->city }} , {{ $ms->pincode }}
                                    </li><br>
                                    <li>
                                        <span class="la la-phone form-icon">Contact No : </span>
                                        {{ $ms->contactno }}
                                    </li><br>
                                    <li>
                                        <span class="la la-envelope-o form-icon">Email : </span>
                                        {{ $ms->email }}
                                    </li><br>
                                    <li>
                                        <span class="la la-folder form-icon">Membership Type :</span>
                                        {{ $ms->type }}
                                    </li><br>
                                    <li>
                                        <span class="la la-money form-icon">Membership Fees :</span>
                                        ₹ {{ $ms->charges }}
                                    </li><br>
                                    <li>
                                        <span class="la la-calendar form-icon">Joining Date</span>
                                        {{ $ms->joiningdate }}
                                    </li><br>
                                    <li>
                                        <span class="la la-calendar form-icon">Expiry Date</span>
                                        {{ $ms->expirydate }}
                                    </li><br>
                                </ul>
                                <hr>
                                <ul class="list-items flex-grow-1">
                                    <li>
                                        <h3 class="title"><b>Dependants Details : </b></h3>
                                    </li><br>
                                    @foreach ($dd as $item)
                                        <li><span class="la la-anchor form-icon"></span><b>Name :</b>
                                            {{ $item->dname }}</li><br>
                                        <li><b>Relation : </b>{{ $item->relation }}</li><br>
                                        <li><b>Birth Date : </b>{{ $item->birthdate }}</li><br>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-12 -->
            </div>
        </div>
    </div> --}}
    
    <style>
        .center {
            margin: auto;
            width: 85%;
            padding: 50px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 105%;
        }

    </style>


    <div class="center">
        <div class="sidebar-widget single-content-widget">
            <!-- <h3>User Login</h3> -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Member Profile</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{-- <h3 class="title font-size-24">Partner Information</h3> --}}
                    <div class="card-item user-card card-item-list mt-4 mb-0">
                        <div>
                            <br><br><br>
                            <img class="img-circle" src="/images/profile.jpg" height="200" width="200" alt="">
                        </div>
                        <div class="card-body">
                            {{-- <h3 class="card-title">TechyDevs</h3> --}}
                            {{-- <p class="card-meta">Member since April 2016</p> --}}
                            <div class="d-flex justify-content-between pt-3">
                                <ul class="list-items list-items-2 flex-grow-1">
                                    <li><span>Name : </span>{{ $ms->membername }}</li><br>
                                    <li><span>Address : </span>{{ $ms->address }} , {{ $ms->city }} , {{ $ms->pincode }}</li><br>
                                    <li><span>Contact No : </span>{{ $ms->contactno }}</li><br>
                                    <li><span>Email : </span>{{ $ms->email }}</li><br>
                                    <li><span>Membership Type :</span>{{ $ms->type }}</li><br>
                                    <li><span>Membership Fees :</span>₹ {{ $ms->charges }}</li><br>
                                    <li><span>Joining Date :</span>{{ $ms->joiningdate }}</li><br>
                                    <li><span>Expiry Date :</span>{{ $ms->expirydate }}</li><br>
                                    {{-- <li><span>Website:</span><a href="#">techydevs.com</a></li><br> --}}
                                </ul>
                                <ul class="list-items flex-grow-1">

                                    <li>
                                        <h3 class="title"><b>Dependants Details : </b></h3>
                                    </li><br>
                                    @foreach ($dd as $item)
                                        <li><span class="la la-anchor form-icon"></span><b>Name :</b>
                                            {{ $item->dname }}</li><br>
                                        <li><b>Relation : </b>{{ $item->relation }}</li><br>
                                        <li><b>Birth Date : </b>{{ $item->birthdate }}</li><br>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-12 -->
            </div>
        </div>
    @endsection