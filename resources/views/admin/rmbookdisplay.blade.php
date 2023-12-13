@extends("admin.adminheader")
@section("content")
<div class="card">
          <div class="col-sm-6">
            <h1 class="m-0">Room Booking Details</h1>
          </div>
              <!--<div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>-->
              <!-- /.card-header -->
             
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    {{-- <th>Id</th> --}}
                    <th>Room Type</th>
                    <th>Member Name</th>
                    <th>Booking Date</th>
                    <th>Checkin-Checkout</th>
                    <th>No. of Rooms</th>
                    <th>Total Members</th>
                    <th>Status</th>
                    <th>Extra Bed</th>
                    <th>Extra Facility</th>
                    <th>Extra Charges</th>
                    <th>Per Day Charges</th>
                    <th>Total Charges</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($bkroom as $item)
                    <tr>
                        {{-- <td>{{$item->id}}</td> --}}
                        <td>{{$item->roomtype}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->bookingdate}}</td>
                        <td>{{$item->checkin}} To {{$item->checkout}}</td>
                        <td>{{$item->noofrooms}}</td>
                        <td>Adults: {{$item->adults}} , Children: {{$item->children}} , Infants: {{$item->infants}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->extrabed}}</td>
                        <td>{{$item->extrafacility}}</td>
                        <td>₹ {{$item->extracharges}}</td>
                        <td>₹ {{$item->pdcharges}}</td>
                        <td>₹ {{$item->totalcharges}}</td>
                        <!-- <td>
                        <a href="{{url('roomchargesedit/'.$item->id)}}"><i class="far fa-edit"></i></a>
                         </a>
                        </td>
                      <td>
                          <a href="{{url('roomchargesdelete/'.$item->id)}}"><i class="fa fa-trash"></i></a>
                      </td> -->
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              <!-- <h6>
                <a href="rcform">
                
                <p>Add New Room Charges</p>
              </a>
            </h6> -->
           

              </div>
              <!-- /.card-body -->
</div>
@endsection