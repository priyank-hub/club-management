@extends("admin.adminheader")
@section("content")
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cancellation Rules</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="crform" name="crform" action="{{url('cruleupdate/'.$cr->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="rules">Rules : </label>
                    <input type="text" value="{{$cr->rules}}" name="rules" class="form-control" id="rules" placeholder="Enter Rules" required="">
                  </div>
                  <div class="form-group">
                    <label for="noofdays">No. of Days : </label>
                    <input type="text" value="{{$cr->noofdays}}" name="noofdays" class="form-control" id="noofdays" placeholder="Enter No. of Days" required="">
                  </div>
                  <div class="form-group">
                    <label for="noofrooms">Refund Rate : </label>
                    <input type="text" value="{{$cr->refundrate}}" name="refundrate" class="form-control" id="refundrate" placeholder="Enter Refund Rate" required="">
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
            <!-- /.card -->
            </div>

          @endsection  