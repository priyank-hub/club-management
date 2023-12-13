@extends("admin.adminheader")
@section("content")
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Membership Type</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="mstypeform" name="mstypeform" action="{{url('mstypeupdate/'.$mstype->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="type">Membership Type : </label>
                    <input type="text" value="{{$mstype->type}}" name="type" class="form-control" id="type" placeholder="Enter Membership Type" required/>
                  </div>
                  <div class="form-group">
                    <label for="noofyear">No. of Year : </label>
                    <input type="text" value="{{$mstype->noofyear}}" name="noofyear" class="form-control" id="noofyear" placeholder="Enter No. Of Year" required/>
                  </div>
                  <div class="form-group">
                    <label for="charges">Charges : </label>
                    <input type="text" value="{{$mstype->charges}}" name="charges" class="form-control" id="charges" placeholder="Enter charges" required/>
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