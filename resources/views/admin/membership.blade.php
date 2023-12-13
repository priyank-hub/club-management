@extends("admin.adminheader")
@section("content")
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0">Members</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Members</li>
            </ol>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Members</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="msform" name="msform" method="post" action="{{url('/msstore')}}">
                @csrf
                <div class="card-body">
                    <!--this section is for member mst table-->
                  <div class="form-group">
                    <label for="type">Member Name : </label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Member Name" required/>
                  </div>
                  <!--<div class="form-group">
                    <label for="type">Password : </label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" >
                  </div>
                  <div class="form-group">
                    <label for="type">Confirm Password : </label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="confirm password" > 
                  </div>-->
                  <div class="form-group">
                    <label for="type">Address : </label>
                    <textarea name="address" class="form-control" id="address" placeholder="Enter address"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="type">City : </label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="Enter City" required/>
                  </div>
                  <div class="form-group">
                    <label for="type">Pincode : </label>
                    <input type="text"  maxlength="6" minlength="6" name="pincode" class="form-control" id="pincode" placeholder="Enter pincode" required/>
                  </div>
                  <div class="form-group">
                    <label for="type">Contact  No: </label>
                    <input type="text" name="contactno" maxlength="10" class="form-control" id="contactno" placeholder="Enter Contact No" required/>
                  </div>
                  <div class="form-group">
                    <label for="type">Email Id : </label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required/>
                  </div>
                  
    
                  <div class="form-group">
                    <label for="type">Membership Type : </label>

                    <select name="mstypeid" class="form-control">
                       @foreach ($mstype as $type)
                               <option value="{{$type->id}}" class="dropdown-item" >{{$type->type}}</option>
                           @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="noofdependant">No. of Dependant : </label>
                    <input type="text" name="noofdependant" class="form-control" id="noofdependant" placeholder="Enter No. of Dependants" required/>
                  </div>
                  <div class="form-group">
                    <label for="charges">Joining Date : </label>
                    <input type="date" name="joiningdate" class="form-control" id="joiningdate" placeholder="Enter Joining Date" required/>
                  </div>
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