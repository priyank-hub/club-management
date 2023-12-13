@extends("user.userheader")
@section("content")
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
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div>
</section>
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<div class="center">
    <div class="sidebar-widget single-content-widget">
        <!-- <h3>User Login</h3> -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Member Login</h3>
        </div>
    </div>
        <div class="enquiry-forum">
            <div class="form-box">
                <div class="form-content">
                    <div class="contact-form-action">
                    
                        <form method="post" action="{{url('/loginstore')}}">
                        @csrf
                            <div class="input-box">
                                <label class="label-text">Email :</label>
                                <div class="form-group">
                                    <span class="la la-envelope-o form-icon"></span>
                                    <input class="form-control" type="email" name="email" placeholder="Email address" required/>
                                </div>
                            </div>
                            <div class="input-box">
                                <label class="label-text">Password :</label>
                                <div class="form-group">
                                    <span class="la la-pencil form-icon"></span>
                                    <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                                </div>
                            </div>
                            <div class="btn-box">
                                <button type="submit" class="theme-btn">Login</button>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div><!-- end form-content -->
            </div><!-- end form-box -->
        </div><!-- end enquiry-forum -->
    </div>
</div>
<style>
.center {
  margin: auto;
  width: 60%;
  padding: 50px;
}
</style>
@endsection