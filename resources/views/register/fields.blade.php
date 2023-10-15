<form action="/register" method="post">
    @csrf

    {{-- inputan name --}}
    <div class="input-group mb-3">
      <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
      placeholder="Full name" required value="{{ old('name') }}">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-user"></span>
        </div>
      </div>
      {{-- keterangan error --}}
      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    {{-- inputan email --}}
    <div class="input-group mb-3">
      <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
      placeholder="Email" required value="{{ old('email') }}">
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
      <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror"
      placeholder="Password" required >
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
      {{-- keterangan error --}}
      @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    {{-- repassowrd (tidak di kirim ke db)--}}
    <div class="input-group mb-3">
      <input type="password" name="repassword" id="repassword" class="form-control @error('repassword') is-invalid @enderror"
      placeholder="Retype password" required>
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
      {{-- keterangan error --}}
      @error('repassword')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="row">
      <div class="col-8">

        {{-- terms (tidak di kirim ke db)--}}
        <div class="form-check">
            <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" value="1" id="terms" name="terms"
            required>
            <label class="form-check-label">
                I agree to the <a href="#">terms</a>
            </label>
            {{-- keterangan error --}}
            @error('terms')
            <div  class="invalid-feedback">
            You must agree before submitting.
            </div>
            @enderror
        </div>
      </div>

      <!-- /.col -->
      <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block">Register</button>
      </div>
      <!-- /.col -->
    </div>
  </form>
