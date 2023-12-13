@extends("admin.adminheader")
@section("content")
<div class="card">
<div class="col-sm-6">
            <h1 class="m-0">Event</h1>
</div>
              <!--<div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>-->
              <!-- /.card-header -->
              
             
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Photo</th>
                    {{-- <th>Id</th> --}}
                    <th>Event Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Charges</th>
                    <th>Description</th>
                    
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($event as $item)
                    <tr>
                    <td><img class="img-circle" src='/storage/{{$item->photo}}' height=50 width=50></td>
                        {{-- <td>{{$item->id}}</td> --}}
                        <td>{{$item->eventname}}</td>
                        <td>{{$item->fromdate}} - {{$item->todate}}</td>
                        <td>{{$item->starttime}} - {{$item->endtime}}</td>
                        <td>₹{{$item->charges}}</td>
                        <td>{{$item->description}}</td>
                        
                        <td>
                        <a href="{{url('eventedit/'.$item->id)}}"><i class="far fa-edit"></i></a>
                         </a>
                        </td>
                      <td>
                          <a href="{{url('eventdelete/'.$item->id)}}"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <br>
              <h6>
                <a href="eventform" >
                
                <p>Add New Events</p>
              </a>
            </h6>
           

              </div>
              <!-- /.card-body -->
</div>
@endsection