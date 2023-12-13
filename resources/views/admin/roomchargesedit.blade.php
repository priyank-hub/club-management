@extends("admin.adminheader")
@section("content")
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Room Charges</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="rcform" name="rcform" action="{{url('roomchargesupdate/'.$rc->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="roomtype">Room Type : </label>
                    <input type="text" value="{{$rc->roomtype}}" name="roomtype" class="form-control" id="roomtype" placeholder="Enter Room Type" required>
                  </div>
                  <div class="form-group">
                    <label for="charges">Charges : </label>
                    <input type="text" value="{{$rc->charges}}" name="charges" class="form-control" id="charges" placeholder="Enter Charges" required>
                  </div>
                  <div class="form-group">
                    <label for="noofrooms">No. of Rooms : </label>
                    <input type="text" value="{{$rc->noofrooms}}" name="noofrooms" class="form-control" id="noofrooms" placeholder="Enter No. of Rooms" required>
                  </div>
                  <div class="form-group">
                    <label for="noofrooms">Description : </label>
                    <input type="text" value="{{$rc->description}}" name="description" class="form-control" id="description" placeholder="Enter Description" required>
                  </div>
                  <div class="form-group">
                    <label for="noofrooms">Photo : </label>
                    <input type="file" value="{{$rc->photo1}}" name="photo1" class="form-control" id="photo1" placeholder="Choose Image" />
                    <br/>
                    <img  src='/storage/{{$rc->photo1}}' height=75 width=75>
                  </div>
                  <div class="form-group">
                    <label for="noofrooms">Photo : </label>
                    <input type="file" value="{{$rc->photo2}}" name="photo2" class="form-control" id="photo2" placeholder="Choose Image" />
                    <br/>
                    <img  src='/storage/{{$rc->photo2}}' height=75 width=75>
                  </div>
                  <div class="form-group">
                    <label for="noofrooms">Photo : </label>
                    <input type="file" value="{{$rc->photo3}}" name="photo3" class="form-control" id="photo3" placeholder="Choose Image" />
                    <br/>
                    <img  src='/storage/{{$rc->photo3}}' height=75 width=75> 
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>

          @endsection