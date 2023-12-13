@extends("admin.adminheader")
@section("content")
<div class="card">
<div class="col-sm-6">
            <h1 class="m-0">Membership Type</h1>
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
                    <th>Membership Type</th>
                    <th>No. of Year</th>
                    <th>Charges</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($mstype as $item)
                    <tr>
                        
                    {{-- <td>{{$item->id}}</td> --}}
                        <td>{{$item->type}}</td>
                        <td>{{$item->noofyear}}</td>
                        <td>₹{{$item->charges}}</td>
                        <td>
                        <a href="{{url('mstypeedit/'.$item->id)}}"><i class="far fa-edit"></i></a>
                         </a>
                        </td>
                      <td>
                          <a href="{{url('mstypedelete/'.$item->id)}}"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <br>
              <h6>
                <a href="mstypeform" >
                
                <p>Add New Membership Type</p>
              </a>
            </h6>
           

              </div>
              <!-- /.card-body -->
</div>
@endsection