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
                            <h2 class="sec__title text-white">Failure</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="home">Home</a></li>
                            <li>Failure</li>
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

<h1 style="align:center">Sorry !!!</h1>

@endsection