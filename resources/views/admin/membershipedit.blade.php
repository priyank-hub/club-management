@extends("admin.adminheader")
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
      <!-- jquery validation -->
      <div class="card card-primary">
          <div class="card-header">
              <h3 class="card-title">Members</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="msform" name="msform" action="{{ url('membershipupdate/' . $ms->id) }}" method="post">
              @csrf
              @method('PUT')
              {{-- <input type="hidden" value="{{$ms->id}}" name="id" class="form-control" id="id"required/> --}}
              <div class="card-body">
                  <div class="form-group">
                      <label for="name">Member Name : </label>
                      <input type="text" value="{{ $ms->name }}" name="name" class="form-control" id="name"
                          placeholder="Enter Member name" required />
                  </div>
                  <div class="form-group">
                      <label for="type">Address : </label>
                      <input type="text" name="address" value="{{ $ms->address }}" class="form-control" id="address"
                          placeholder="Enter address">
                  </div>
                  <div class="form-group">
                      <label for="type">City : </label>
                      <input type="text" name="city" value="{{ $ms->city }}" class="form-control" id="city"
                          placeholder="Enter City" required />
                  </div>
                  <div class="form-group">
                      <label for="type">Pincode : </label>
                      <input type="text" maxlength="6" value="{{ $ms->pincode }}" minlength="6" name="pincode"
                          class="form-control" id="pincode" placeholder="Enter pincode" required />
                  </div>
                  <div class="form-group">
                      <label for="type">Contact No: </label>
                      <input type="text" name="contactno" value="{{ $ms->contactno }}" maxlength="10"
                          class="form-control" id="contactno" placeholder="Enter Contact No" required />
                  </div>
                  <div class="form-group">
                      <label for="type">Email Id : </label>
                      <input type="email" name="email" value="{{ $ms->email }}" class="form-control" id="email"
                          placeholder="Enter Email" required />
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
                      <input type="text" value="{{ $ms->noofdependant }}" name="noofdependant" class="form-control"
                          id="noofdependant" placeholder="Enter No. Of Dependant" required />
                  </div>
                  <div class="form-group">
                      <label for="joiningdate">Joining Date : </label>
                      <input type="date" value="{{ $ms->joiningdate }}" name="joiningdate" class="form-control"
                          id="joiningdate" placeholder="Enter Joining Date" required />
                  </div>
                  {{-- <div class="form-group">
              <label for="expirydate">Expiry Date : </label>
              <input type="date" value="{{$ms->expirydate}}" name="expirydate" class="form-control" id="expirydate" placeholder="Enter Expiry Date" required/>
            </div> --}}
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