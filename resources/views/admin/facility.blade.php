@extends("admin.adminheader")
@section("content")
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0">Facility</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Facility</li>
            </ol>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Facilities</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="facilityForm" name="facilityform" method="post"  enctype="multipart/form-data" action="{{url('/facilitystore')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="facilityname">Facility Name : </label>
                    <input type="text" name="facilityname" class="form-control" id="facilityname" placeholder="Enter facility Name" required/>
                  </div>
                  <div class="form-group">
                    <label for="description">Facility Description : </label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Enter facility description" required>
                  </div>
                  <div class="form-group">
                    <label for="charges">Charges : </label>
                    <input type="text" name="charges" class="form-control" id="charges" placeholder="Enter charges"/>
                  </div>
                  <div class="form-group">
                    <label for="photo">Image : </label>
                    <input type="file" name="photo" class="form-control" id="photo" placeholder="Enter photo" required/>
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