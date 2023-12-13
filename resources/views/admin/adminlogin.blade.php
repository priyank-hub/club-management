<title>Happy Club</title>
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">


<body class="login-page" style="min-height: 496.781px;">
  <div class="login-box">
    <div class="login-logo">
      {{-- Happy<b> Club</b> --}}
      <img src="{{url('images/logo.jpeg')}}" alt="" height="100" width="130">
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg"><b>Login to start your session</b></p>

        <form id="adminlogin" action="{{url('/adminhome')}}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            {{-- <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div> --}}
            <!-- /.col -->
            <div class="col-4" style="align-content: center">
              <button type="submit" class="btn btn-primary btn-block">LogIn</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="mb-1">
          <a href="{{url('/forgotpwd')}}">Forgot Password</a>
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

<style>
.login-box{
  background-image:linear-gradient("{{url('images/color-bg.png')}}")
}

  </style>