@extends("admin.adminheader")
@section('content')
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
                <a href="{{ url('/event') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-down"></i></a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="small-box bg-danger">
                <div class="inner">
                    <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->
                    <h1>Facility</h1>
                </div>
                <div class="icon">
                    <i class="fas fa-inbox"></i>
                </div>
                <a href="{{ url('/facility') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-down"></i></a>
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
                <a href="{{ url('/room') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-down"></i></a>
            </div>
        </div>
    </div>
    </div>

    <div class="card">
        <div class="col-sm-6">
            <br>
            <h1 class="m-0">Booked Event</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Photo</th>
                        {{-- <th>Id</th> --}}
                        <th>Event Name</th>
                        <th>Member Name</th>
                        <th>Date</th>
                        <th>No. of Members</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($bkevent as $item)
                        <tr>
                            <td><img class="img-circle" src='/storage/{{ $item->photo }}' height=50 width=50></td>
                            {{-- <td>{{$item->id}}</td> --}}
                            <td>{{ $item->eventname }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->fromdate }} To {{ $item->todate }}</td>
                            <td>{{ $item->noofmember }}</td>
                            {{-- <td>
                        <a href="{{url('eventedit/'.$item->id)}}"><i class="far fa-edit"></i></a>
                         </a>
                        </td>
                      <td>
                          <a href="{{url('eventdelete/'.$item->id)}}"><i class="fa fa-trash"></i></a>
                      </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endsection