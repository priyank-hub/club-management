@extends("admin.adminheader")
@section("content")
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0">Cancellation Rules</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cancellation Rules</li>
            </ol>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cancellation Rules</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="cruleform" name="cruleform" action="{{url('/crulestore')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="roomtype">Rules : </label>
                    <input type="text" name="rules" class="form-control" id="rules" placeholder="Enter Rules " required="">
                  </div>
                  <div class="form-group">
                    <label for="charges">No. of Days : </label>
                    <input type="text" name="noofdays" class="form-control" id="noofdays" placeholder="Enter No of Days" required="">
                  </div>
                  <div class="form-group">
                    <label for="noofrooms">Refund Rate : </label>
                    <input type="text" name="refundrate" class="form-control" id="refundrate" placeholder="Enter Refund Rate" required="">
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