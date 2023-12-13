@extends("admin.adminheader")
@section('content')
    <div class="card">
        <div class="col-sm-6">
            <h1 class="m-0">Room Charges</h1>
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
                        <th>Photo</th>
                        <th>Photo</th>
                        {{-- <th>Id</th> --}}
                        <th>Room Type</th>
                        <th>Charges</th>
                        <th>No. of Rooms</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rc as $item)
                        <tr>
                            <td><img class="img-circle" src='/storage/{{ $item->photo1 }}' height=50 width=50></td>
                            <td><img class="img-circle" src='/storage/{{ $item->photo2 }}' height=50 width=50></td>
                            <td><img class="img-circle" src='/storage/{{ $item->photo3 }}' height=50 width=50></td>
                            {{-- <td>{{ $item->id }}</td> --}}
                            <td>{{ $item->roomtype }}</td>
                            <td>₹ {{ $item->charges }}</td>
                            <td>{{ $item->noofrooms }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="{{ url('roomchargesedit/' . $item->id) }}"><i class="far fa-edit"></i></a>
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('roomchargesdelete/' . $item->id) }}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <h6>
                <a href="rcform">

                    <p>Add New Room Charges</p>
                </a>
            </h6>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
