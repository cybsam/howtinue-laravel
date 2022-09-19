@extends('layouts.LogRegMaster')
@section('title', 'Register - HowTinue')
@section('LogRegMaster')


<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center py-4">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('SupUser/assets/img/logo.png') }}" alt="">
                  <span class="d-none d-lg-block">{{ __('HowTinue') }}</span>
                </a>
              </div>
            <div class="card">
                <div class="card-body">
                <form class="row g-3 mt-2" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ( Session::get('regSucc') )
                    <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
                        {{ Session::get('regSucc') }}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    @if (Session::get('regFaild'))
                    <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                        {{ Session::get('regFaild') }}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    <div class="col-md-12">
                        <label for="User Name" class="form-label">{{ __('Your Name') }}</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail5" class="form-label">{{ __('Email') }}</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="yourUsername" class="form-label">User Name</label>
                      <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ old('username') }}" required autocomplete="username" autofocus >
                        @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword5" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm" required autocomplete="new-password">

                    </div>
                    <div class="col-md-12">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Picture</label>
                        <div class="col-sm-12">
                            <input class="form-control @error('proimage') is-invalid @enderror" name="proimage" id="proimage" type="file" >
                            @error('proimage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </div>
                    <div class="col-12">
                        <label for="inputAddress5" class="form-label">Address</label>
                        <input type="text" class="form-control @error('userAddress') is-invalid @enderror" name="userAddress" id="userAddress" value="{{ old('userAddress') }}" placeholder="1234 Main St">
                        @error('userAddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control @error('userCity') is-invalid @enderror" name="userCity" placeholder="newyork, kolkata, dhaka" id="userCity">
                        @error('userCity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                    <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="userstate" name="userstate" class="form-select @error('userstate') is-invalid @enderror">
                        <option selected>Choose...</option>
                        <option value="dhaka">Dhaka</option>
                        <option value="khulna">khulna</option>
                        <option value="barisal">Barisal</option>
                        <option value="jessore">Jerrore</option>
                        <option value="chittagonj">Chittagong</option>
                        <option value="rongpur">Rongpur</option>
                        
                    </select>
                    @error('userstate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                    <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" name="userzip" class="form-control @error('userzip') is-invalid @enderror" id="userzip">
                    @error('userzip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                    <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input @error('check') is-invalid @enderror" name="check" id="check" type="checkbox" id="check" required autocomplete="check">
                        <label class="form-check-label" for="gridCheck">
                        Accept our terms and condition
                        @error('check')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </label>
                    </div>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100">{{ __('Sign Up') }}</button>

                    </div>
                    <div class="col-12">
                        <p class="small mb-0 text-center">{{ __('Already have an account?') }} <a href="{{ route('login') }}">{{ __('Log in') }}</a></p>
                      </div>
                </form><!-- End Multi Columns Form -->

                </div>
            </div>
        </div>
      </div>
    </section>



@endsection
