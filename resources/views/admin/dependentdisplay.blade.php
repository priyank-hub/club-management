@extends("admin.adminheader")
@section("content")
<div class="card">
<div class="col-sm-6">
            <br><h1>Dependant</h1>
          </div>
              <!--<div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>-->
              <!-- /.card-header -->
             
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Dependant Name</th>
                    <th>Member Name</th>
                    <th>relation</th>
                    <th>BirthDate</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    @foreach($dd as $item)
                    
                    <tr>
                      
                        <td>{{$item->dname}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->relation}}</td>
                        <td>{{$item->birthdate}}</td>
                        <td>
                        <a href="{{url('dependentedit/'.$item->id)}}"><i class="far fa-edit"></i></a>
                         </a>
                        </td>
                      <td>
                          <a href="{{url('dependentdelete/'.$item->id)}}"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <br>
              <h6>
                <a href="ddform" >
                
                <p>Add New Dependents</p>
              </a>
            </h6>
           

              </div>
              <!-- /.card-body -->
</div>
@endsection