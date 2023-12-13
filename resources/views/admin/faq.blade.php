@extends("admin.adminheader")
@section("content")
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0">FAQ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">FAQ</li>
            </ol>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">FAQ</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="faqForm" name="faqform" method="post" action="{{url('/faqstore')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="question">Question : </label>
                    <input type="text" name="question" class="form-control" id="question" placeholder="Enter question" required/>
                  </div>
                  <div class="form-group">
                    <label for="answer">Answer</label>
                    <input type="text" name="answer" class="form-control" id="answer" placeholder="Enter Answer" required/>
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
                  <button type="Reset" class="btn btn-primary">Reset</button>
                </div>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>

          @endsection  