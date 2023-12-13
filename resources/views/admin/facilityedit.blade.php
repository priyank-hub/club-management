@extends("admin.adminheader")
@section("content")
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Facility</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="facilityform" name="facilityform" enctype="multipart/form-data" action="{{url('facilityupdate/'.$facility->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="facilityname">Facility Name : </label>
                    <input type="text" value="{{$facility->facilityname}}" name="facilityname" class="form-control" id="facilityname" placeholder="Enter facility name" required/>
                  </div>
                  <div class="form-group">
                    <label for="description">Facility Description : </label>
                    <input type="text" value="{{$facility->description}}" name="description" class="form-control" id="description" placeholder="Enter facility description" required>
                  </div>
                  <div class="form-group">
                    <label for="charges">Charges : </label>
                    <input type="text" value="{{$facility->charges}}" name="charges" class="form-control" id="charges" placeholder="Enter charges" required/>
                  </div>
                  <div class="form-group">
                    <label for="charges">Photo : </label>
                    <input type="file" value="{{$facility->photo}}" name="photo" class="form-control" id="photo" placeholder="Enter photo" />
                  <br/>
                    <img  src='/storage/{{$facility->photo}}' height=75 width=75> 
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