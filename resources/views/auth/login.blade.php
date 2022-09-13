@extends('layouts.LogRegMaster')
@section('title', 'Login - HowTinue')
@section('LogRegMaster')

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">{{ __('HowTinue') }}</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">{{ __('Login to Your Account') }}</h5>

                  </div>

                  <form class="row g-3 " action="{{ route('login') }}" method="POST" novalidate>
                    @csrf


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

                    {{-- <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" id="username" required autocomplete="username" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div> --}}

                    <div class="col-12">
                        <label for="yourEmail" class="form-label">{{ __('Email') }}</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ Session::get('verifiedEmail') ? Session::get('verifiedEmail') : old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>


                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>



                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" {{ old('remember') ? 'checked' : '' }} id="remember">
                        <label class="form-check-label" for="rememberMe">{{ __('Remember Me') }}</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">{{ __('Sign In') }}</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">{{ __("Don't have account?") }} <a href="{{ route('register') }}">Create an account</a></p>
                    </div>
                    <div class="col-12">
                        <p class="small mb-0">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </p>
                      </div>
                  </form>

                </div>
              </div>

              <div class="credits">

                Designed by <a href="#">CybSam</a>
              </div>

        </form>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



@endsection
