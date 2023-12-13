@extends("admin.adminheader")
@section('content')
    <div class="card">
        <div class="col-sm-6">
            <h1 class="m-0">Contact Us</h1>
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
                        <th>Name</th>
                        <th>Contact No.</th>
                        <th>Message</th>
                        {{-- <th>Charges</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cu as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->contactno }}</td>
                            <td>{{ $item->message }}</td>
                            {{-- <td>₹{{$item->charges}}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
                <br>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    @endsection