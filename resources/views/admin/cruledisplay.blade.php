@extends("admin.adminheader")
@section("content")
<div class="card">
          <div class="col-sm-6">
            <h1 class="m-0">Cancellation Rules</h1>
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
                    <th>Rules</th>
                    <th>No. of Days</th>
                    <th>Refund Rate</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($cr as $item)
                    <tr>
                        {{-- <td>{{$item->id}}</td> --}}
                        <td>{{$item->rules}}</td>
                        <td>{{$item->noofdays}}</td>
                        <td>{{$item->refundrate}}%</td>
                        <td>
                        <a href="{{url('cruleedit/'.$item->id)}}"><i class="far fa-edit"></i></a>
                         </a>
                        </td>
                      <td>
                          <a href="{{url('cruledelete/'.$item->id)}}"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <br>
              <h6>
                <a href="cruleform">
                
                <p>Add New Cancellation Rule</p>
              </a>
            </h6>
           

              </div>
              <!-- /.card-body -->
</div>
@endsection