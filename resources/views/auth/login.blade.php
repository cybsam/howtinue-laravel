@extends('layouts.FrontEndMaster')
@section('FrontTitle', 'SignIn - Healthy Botic')
@section('FrontEnd')
    


  <section class="wrap__section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Form Login -->
          <div class="card mx-auto" style="max-width: 380px">
            <div class="card-body">
              <h4 class="card-title mb-4">Sign in</h4>
              @if (Session::get('logfaild'))
                    <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                        {{ Session::get('logfaild') }}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    @if ( Session::get('info') )
                    <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
                        {{ Session::get('info') }}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
              <form action="{{ route('login') }}" method="POST" novalidate>
                @csrf
                <a href="#" class="btn btn-facebook btn-block mb-2 text-white">
                  <i class="fa fa-facebook"></i> &nbsp; Sign in with Facebook</a
                >
                <a href="#" class="btn btn-primary btn-block mb-4">
                  <i class="fa fa-google"></i> &nbsp; Sign in with Google</a
                >
                <div class="form-group">
                  <input type="email" placeholder="Email Address" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ Session::get('verifiedEmail') ? Session::get('verifiedEmail') : old('email') }}" required autocomplete="email" autofocus/>
                  @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <!-- form-group// -->
                <div class="form-group">
                  <input type="password" placeholder="Password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>
                <!-- form-group// -->
  
                <div class="form-group">
                  @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="float-right">
                      
                      {{ __('Forgot Your Password?') }}</a>
                @endif
                  <label class="float-left custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked="" value="true" {{ old('remember') ? 'checked' : '' }} id="remember"/>
                    <span class="custom-control-label"> Remember </span>
                  </label>
                </div>
                <!-- form-group form-check .// -->
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">
                    Login
                  </button>
                </div>
                <!-- form-group// -->
              </form>
            </div>
            <!-- card-body.// -->
          </div>
          <!-- card .// -->
  
          <p class="text-center mt-4">
            Don't have account? <a href="{{ route('register') }}">Sign up</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- end login -->
  

@endsection
