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
<br><br>
<div class="sidebar-widget single-content-widget">
    <div class="enquiry-forum">
        <div class="form-box">
            <div class="form-content">
                <div class="contact-form-action">
                    <br>
                    <form name="bookevent" action="{{url('/bookeventstore')}}" method="get">
                <div class="row">
                    <div class="col-lg-6 responsive-column">
                    <h3 style="color:blue">Book For Event</h3>
                    <br>
                        <div class="input-box">
                            <div class="form-group">
                                <label class="label-text">Event : </label>
                                <span class="title font-size-20">{{$event->eventname}}</span>
                            </div>
                            <div class="form-group">
                                <label class="label-text">Date : </label>
                                <span class="title font-size-20">{{$event->fromdate}} to {{$event->todate}}</span>
                            </div>
                            <div class="form-group">
                                <label class="label-text">Duration : </label>
                                <span class="title font-size-20">
                                    {{date_diff(new \DateTime($event->fromdate), new\DateTime($event->todate))->format("%d Days");}}
                                </span>
                            </div>
                        </div>
                        <input type="hidden" value="{{$event->id}}" name="eventid" class="form-control" id="eventid">
                        <div class="input-box">
                            <label class="label-text">No. Of Member : </label>
                                <select name="noofmember" class="font-size-20">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                        </div>
                    </div>
                    <div class="col-lg-6 responsive-column">
                        <img width="400" height="400" src="/storage/{{$event->photo}}" alt="Destination-img" style="align:left"> 
                    </div>
                    </div>
                        <div class="btn-box">
                            <button type="submit" class="theme-btn">Book</button>
                        </div>

                    </form>
                </div><!-- end contact-form-action -->
            </div><!-- end form-content -->
        </div><!-- end form-box -->
    </div><!-- end enquiry-forum -->
</div>

@endsection