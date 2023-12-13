@extends("admin.adminheader")
@section("content")
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0">Dependant</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dependant</li>
            </ol>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dependant</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="ddform" name="ddform" method="post" action="{{url('/ddstore')}}">
                @csrf
         <!--        <div class="card-body">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif-->
                  <!--<div class="form-group">
                    <label for="type">Member Name : </label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Member Name">
                  </div>-->
                    <!--this section is for member mst table-->
                  <div class="form-group">
                    <label for="type">Dependant Name : </label>
                    <input type="text" name="dname"  class="form-control" id="name" placeholder="Enter Dependant Name" required/>
                  </div>
                  <div class="form-group">
                    <label for="type">Member Name : </label>
                    <select name="membershipid" class="form-control" required>
                       @foreach ($ms as $item)
                               <option value="{{$item->id}}" class="dropdown-item" >{{$item->name}}</option>
                       @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="type">Relation : </label>
                    <input type="text" name="relation" class="form-control" id="relation" placeholder="Enter Relation" required/>
                  </div>
                  
                  <div class="form-group">
                    <label for="type">Birthdate : </label>
                    <input type="date" name="birthdate" class="form-control" id="birthdate" placeholder="Enter birthdate" required/>
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
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>

 <script>
$(function () {
  alert("Sdfds");
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successfully submitted!" );
    }
  });
  $('#ddform').validate({
    rules: {
      dname: {
        required: true,
      },
      membershipid: {
        required: true,
        minlength: 5
      },
      relation: {
        required: true
      },
      birthdate:{
        required: true
      },
    },
    messages: {
      name: {
        required: "Please enter name",
      },
      membershipid: {
        required: "Please select desired option",
      },
      relation: {
        required: "Please enter relation",
      },
      birthdate: {
        required: "Please enter birthdate",
      },
      
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>