@extends("admin.adminheader")
@section("content")
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dependant</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="ddform" name="ddform" action="{{url('dependentupdate/'.$dd->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Dependant Name : </label>
                    <input type="text" value="{{$dd->dname}}" name="dname" class="form-control" id="name" placeholder="Enter Dependant name" required/>
                  </div>
                  <div class="form-group">
                    <label for="type">Membership Id : </label>

                    <select name="membershipid" class="form-control">
                    @foreach ($ms as $item)
                            @if ($item->id==$dd->membershipid)
                                <option selected value="{{$item->id}}" class="dropdown-item" >{{$item->name}}</option>
                            @else
                            <option value="{{$item->id}}" class="dropdown-item" >{{$item->name}}</option>
                            @endif
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="noofdependant">Relation : </label>
                    <input type="text" value="{{$dd->relation}}" name="relation" class="form-control" id="relation" placeholder="Enter Relation" required/>
                  </div>
                  <div class="form-group">
                    <label for="birthdate">BirthDate : </label>
                    <input type="date" value="{{$dd->birthdate}}" name="birthdate" class="form-control" id="birthdate" placeholder="Enter BirthDate" required/>
                  </div>
                  
                  <!--<div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>-->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
        </div>
        <!-- /.card -->
    </div>

@endsection  