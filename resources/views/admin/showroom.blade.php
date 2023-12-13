@extends("admin.adminheader")
@section("content")
<div class="row">
    <div class="col-lg-4">
        <div class="small-box bg-info">
            <div class="inner">
                <!-- <h3>150</h3> -->
                <h1>Booked Event</h1>
            </div>
            <div class="icon">
            <i class="fas fa-laptop"></i>
            </div>
                <a href="{{url('/event')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-down"></i></a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h1>Facility</h1>
                </div>
                <div class="icon">
                    <i class="fas fa-inbox"></i>
                </div>
                <a href="{{url('/facility')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-down"></i></a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="small-box bg-warning">
                <div class="inner">
                    <!-- <h3>44</h3> -->
                    <h1>Booked Room</h1>
                </div>
                <div class="icon">
                    <i class="far fa-calendar-alt"></i>
                </div>
                <a href="{{url('/room')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-down"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="col-sm-6">
        <br><h1 class="m-0">Booked Room Details</h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Room Type</th>
                    <th>Member Name</th>
                    <th>Booking Date</th>
                    <th>Check-in & Check-out</th>
                    <th>No. of Rooms</th>
                    <th>Member</th>
                    <th>Status</th>
                    <th>Extra Bed Charges</th>
                    <th>Extra Facility</th>
                    <th>Extra Charges</th>
                    <th>Per Day Charges</th>
                    <th>Total Charges</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bkroom as $item)
                    <tr>
                        <td>{{$item->roomtype}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->bookingdate}}</td>
                        <td>{{$item->checkin}} <b> To </b> {{$item->checkout}}</td>
                        <td>{{$item->noofrooms}}</td>
                        <td>Adults : {{$item->adults}} , Children : {{$item->children}} , Infants : {{$item->infants}}</td>
                        <td>{{$item->status}}</td>
                        <td>₹ {{$item->extrabed}}</td>
                        <td>{{$item->extrafacility}}</td>
                        <td>₹ {{$item->extracharges}}</td>
                        <td>₹ {{$item->pdcharges}}</td>
                        <td>₹ {{$item->totalcharges}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection