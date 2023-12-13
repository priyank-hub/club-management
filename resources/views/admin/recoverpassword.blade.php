<title>The Clubies</title>
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">


<body class="login-page" style="min-height: 386.781px;">
    <div class="login-box">
        <div class="login-logo">
            {{-- The<b> Clubies</b> --}}
      <img src="{{url('images/club.jpg')}}" alt="" height="100" width="130">
        </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

        <form action="{{url('/adminedit')}}" method="get">
          @csrf
            <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Change password</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <p class="mt-3 mb-1">
            <a href="{{url('/adminlogin')}}">Login</a>
        </p>
    </div>
    <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>


</body>