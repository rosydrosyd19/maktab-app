<body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="#"><b>Maktab</b>APP</a>
      </div>

      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Register a new membership</p>

          {{-- isi inputan form --}}
          @include('register.fields')

          {{-- register with google --}}
          {{-- <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i>
              Sign up using Google+
            </a>
          </div> --}}

          <a href="/login" class="text-center">I already have a account</a>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
