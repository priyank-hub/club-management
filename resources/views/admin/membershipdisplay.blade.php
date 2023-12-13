@extends("admin.adminheader")
@section("content")
<div class="card">
<div class="col-sm-6">
            <h1 class="m-0">Members</h1>
          </div>
              <!--<div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>-->
              <!-- /.card-header -->
             
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      
                    {{-- <th>ID</th> --}}
                    <th>Member Name</th>
                    <th>Address</th>
                    <th>Contact No.</th>
                    <th>Email</th>
                    <th>Membership Type</th>
                    <th>No. of Dependant</th>
                    <th>Joining Date</th>
                    <th>Expiry Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    @foreach($ms as $item)
                    {{-- {{$item->id}} --}}
                    <tr>   
                        {{-- <td>{{$item->membershipid}}</td> --}}
                        <td>{{$item->name}}</td>
                        <td>{{$item->address}}, {{$item->city}}, {{$item->pincode}}</td>
                        <td>{{$item->contactno}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->noofdependant}}</td>
                        <td>{{$item->joiningdate}}</td>
                        <td>{{$item->expirydate}}</td>
                     
                        <td>
                          <a href="{{url('membershipedit/'.$item->membershipid)}}"><i class="far fa-edit"></i></a>
                         </a>
                        </td>
                      <td>
                          <a href="{{url('membershipdelete/'.$item->membershipid)}}"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table><br>
              <h6>
                <a href="msform" >
                
                <p>Add New Membership</p>
              </a>
            </h6>
           

              </div>
              <!-- /.card-body -->
</div>
@endsection