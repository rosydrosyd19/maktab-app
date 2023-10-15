<body class="hold-transition login-page d-flex flex-column min-vh-100">
    {{-- notifikasi --}}
    @include('sweetalert::alert')

        <div class="login-box">
          <div class="login-logo">
            <a href="#"><b>Maktab</b>APP</a>
          </div>
          <!-- /.login-logo -->
          <div class="card">
            <div class="card-body login-card-body">
              <p class="login-box-msg">Sign in to start your session</p>

              {{-- isi inputan form --}}
              @include('login.fields')

              {{-- login dengan google --}}
              {{-- <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-danger">
                  <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
              </div> --}}

              {{-- forgot password --}}
              {{-- <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
              </p> --}}

              <p class="mb-0">
                <a href="/register" class="text-center">Register a new account</a>
              </p>
            </div>
            <!-- /.login-card-body -->
          </div>
        </div>
        <!-- /.login-box -->
    </body>
