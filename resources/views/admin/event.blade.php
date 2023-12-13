@extends("admin.adminheader")
@section("content")
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0">Event</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Event</li>
            </ol>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Events</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="eventform" name="eventform" method="post" action="{{url('/eventstore')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="eventname">Event Name: </label>
                    <input type="text" name="eventname" class="form-control" id="eventname" placeholder="Enter Event name" required/>
                    @error('title')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="fromdate">From Date:</label>
                    <input type="date" name="fromdate" class="form-control" id="fromdate" placeholder="Enter Date" required/>
                  </div>
                  <div class="form-group">
                    <label for="todate">To Date:</label>
                    <input type="date" name="todate" class="form-control" id="todate" placeholder="Enter Date" required/>
                  </div>
                  <div class="form-group">
                    <label for="starttime">Start Time:</label>
                    <input type="time" name="starttime" class="form-control" id="starttime" placeholder="Enter Time" required/>
                  </div>
                  <div class="form-group">
                    <label for="endtime">End Time:</label>
                    <input type="time" name="endtime" class="form-control" id="endtime" placeholder="Enter Time" required/>
                  </div>
                  <div class="form-group">
                    <label for="charges">Charges:</label>
                    <input type="charges" name="charges" class="form-control" id="charges" placeholder="Enter charges" required/>
                  </div>
                  <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="description" name="description" class="form-control" id="description" placeholder="Enter Description" required/>
                  </div>
                 
                  <div class="form-group">
                    <label for="photo">Image:</label>
                    <input type="file" name="photo" class="form-control" id="photo" placeholder="" required/>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="Reset" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>

          @endsection  