@extends("admin.adminheader")
@section("content")
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0">Room Charges</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Room Charges</li>
            </ol>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Room Charges</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="rcform" name="rcform" method="post" action="{{url('/rcstore')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="roomtype">Room Type : </label>
                    <input type="text" name="roomtype" class="form-control" id="roomtype" placeholder="Enter Room Type" required>
                  </div>
                  <div class="form-group">
                    <label for="charges">Charges : </label>
                    <input type="text" name="charges" class="form-control" id="charges" placeholder="Enter Charges" required>
                  </div>
                  <div class="form-group">
                    <label for="noofrooms">No. of Rooms : </label>
                    <input type="text" name="noofrooms" class="form-control" id="noofrooms" placeholder="Enter No. of Rooms" required>
                  </div>
                  <div class="form-group">
                    <label for="noofrooms">Description : </label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description" required>
                  </div>
                  <div class="form-group">
                    <label for="noofrooms">Photo : </label>
                    <input type="file" name="photo1" class="form-control" id="photo1" placeholder="Choose Image" required>
                  </div>
                  <div class="form-group">
                    <label for="noofrooms">Photo : </label>
                    <input type="file" name="photo2" class="form-control" id="photo2" placeholder="Choose Image" required>
                  </div>
                  <div class="form-group">
                    <label for="noofrooms">Photo : </label>
                    <input type="file" name="photo3" class="form-control" id="photo3" placeholder="Choose Image" required>
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
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>

          @endsection