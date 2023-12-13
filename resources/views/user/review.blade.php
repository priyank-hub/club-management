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
                                <h2 class="sec__title text-white">Feedback & Review</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="home">Home</a></li>
                                <li>Feedback</li>
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
    <br>
    <div class="comment-forum padding-top-40px">
        <div class="form-box">
            <div class="form-title-wrap">
                <h2 class="title">Feedback & Review</h2>
            </div><!-- form-title-wrap -->
            <div class="form-content">
                <form action="{{ url('/storereview') }}" method="post" name="review">
                    @csrf
                    <div class="rate-option p-2">
                        <div class="form-title-wrap">
                            <div class="row">
                                <div class="col-lg-4 responsive-column">
                                    <div class="rate-option-item">
                                        <b><label>Service</label></b>

                                        
                                        <div class="rate-stars-option">
                                            <input type="checkbox" id="lst1" name="lst1" value="1">
                                            <label for="lst1"></label>
                                            <input type="checkbox" id="lst2" name="lst2" value="2">
                                            <label for="lst2"></label>
                                            <input type="checkbox" id="lst3" name="lst3" value="3">
                                            <label for="lst3"></label>
                                            <input type="checkbox" id="lst4" name="lst4" value="4">
                                            <label for="lst4"></label>
                                            <input type="checkbox" id="lst5" name="lst5" value="5">
                                            <label for="lst5"></label>
                                        </div>
                                    </div>
                                </div><!-- col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <div class="rate-option-item">
                                        <b><label>Location</label></b>
                                        <div class="rate-stars-option">
                                            <input type="checkbox" id="l1" name="location" value="1">
                                            <label for="l1"></label>
                                            <input type="checkbox" id="l2" name="location" value="2">
                                            <label for="l2"></label>
                                            <input type="checkbox" id="l3" name="location" value="3">
                                            <label for="l3"></label>
                                            <input type="checkbox" id="l4" name="location" value="4">
                                            <label for="l4"></label>
                                            <input type="checkbox" id="l5" name="location" value="5">
                                            <label for="l5"></label>
                                        </div>
                                    </div>
                                </div><!-- col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <div class="rate-option-item">
                                        <b><label>Facilities</label></b>
                                        <div class="rate-stars-option">
                                            <input type="checkbox" id="f1" name="facilities" value="1">
                                            <label for="f1"></label>
                                            <input type="checkbox" id="f2" name="facilities" value="2">
                                            <label for="f2"></label>
                                            <input type="checkbox" id="f3" name="facilities" value="3">
                                            <label for="f3"></label>
                                            <input type="checkbox" id="f4" name="facilities" value="4">
                                            <label for="f4"></label>
                                            <input type="checkbox" id="f5" name="facilities" value="5">
                                            <label for="f5"></label>
                                        </div>
                                    </div>
                                </div><!-- col-lg-4 -->
                            </div><!-- end row -->
                        </div>
                    </div><!-- end rate-option -->
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="row">
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label class="label-text">Name</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" name="name" placeholder="Your name"
                                                value="{{ session('membername') }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label class="label-text">Email</label>
                                        <div class="form-group">
                                            <span class="la la-envelope-o form-icon"></span>
                                            <input class="form-control" type="email" name="email"
                                                placeholder="Email address" value="{{ session('email') }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <label class="label-text">Feedback</label>
                                        <div class="form-group">
                                            <span class="la la-pencil form-icon"></span>
                                            <textarea class="message-control form-control" name="feedback"
                                                placeholder="Give Your Feedback" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="btn-box">
                                        <button type="submit" class="theme-btn">Leave a Review</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
            </div><!-- end form-content -->
        </div><!-- end form-box -->
    </div>
@endsection
