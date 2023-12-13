@extends("admin.adminheader")
@section("content")
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">FAQ</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="faqform" name="faqform" method="post" action="{{url('faqupdate/'.$faq->id)}}">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="question">Question : </label>
                    <input type="text" value="{{$faq->question}}" name="question" class="form-control" id="question" placeholder="Enter question" required/>
                  </div>
                  <div class="form-group">
                    <label for="answer">Answer</label>
                    <input type="text" name="answer" value="{{$faq->answer}}" class="form-control" id="answer" placeholder="Enter Answer" required/>
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
                  <button type="Reset" class="btn btn-primary">Reset</button>
               </div>
              </form>
            </div>
            <!-- /.card -->
            </div>

          @endsection  