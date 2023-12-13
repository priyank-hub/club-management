<!-- @extends("admin.adminheader")
@section('content')
    <div class="card">
        <div class="col-sm-6">
            <h1 class="m-0">Member Feedback</h1>
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
                        <th>Feedback</th>
                        {{-- <th>Charges</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rv as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->feedback }}</td>
                            {{-- <td>₹{{$item->charges}}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
                <br>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection -->