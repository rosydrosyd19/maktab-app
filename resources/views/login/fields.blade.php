    <form action="/login" method="post">
        @csrf

        {{-- Inputan email --}}
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control @error('email')
          is-invalid @enderror" placeholder="Email" autofocus value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
            {{-- keterangan error --}}
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

            {{-- inputan password --}}
            <div class="input-group mb-3">
          <input type="password"name="password" id="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            {{-- remember me --}}
            {{-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> --}}
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
