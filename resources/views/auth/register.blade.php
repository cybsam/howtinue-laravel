@extends('layouts.FrontEndMaster')
@section('FrontTitle', 'SignUp - Howtinue')
@section('FrontEnd')



    <!-- register -->
    <section class="wrap__section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- register -->
                    <!-- Form Register -->

                    <div class="card mx-auto" style="max-width:520px;">
                        <article class="card-body">
                            <header class="mb-4">
                                <h4 class="card-title">Sign up</h4>
                            </header>
                            <form  action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if (Session::get('regSucc'))
                                    <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show"
                                        role="alert">
                                        {{ Session::get('regSucc') }}
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                @if (Session::get('regFaild'))
                                    <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show"
                                        role="alert">
                                        {{ Session::get('regFaild') }}
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>Full name</label>
                                        <input type="text" name="name" placeholder="Your full name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div> <!-- form-group end.// -->
                                    <div class="col form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" placeholder="ex: mark, albert"
                                            class="form-control @error('username') is-invalid @enderror" id="username"
                                            value="{{ old('username') }}" required autocomplete="username" autofocus>
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> <!-- form-group end.// -->
                                </div> <!-- form-row end.// -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="ex: johndiu@example.com"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <small class="form-text text-muted">We'll never share your email with anyone
                                        else.</small>
                                </div> <!-- form-group end.// -->
                                <div class="form-group">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input class="custom-control-input @error('gender') is-invalid @enderror" checked="" type="radio" name="gender"
                                            value="male">
                                        <span class="custom-control-label"> Male </span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input class="custom-control-input" type="radio" name="gender"
                                            value="female">
                                        <span class="custom-control-label"> Female </span>
                                    </label>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div> <!-- form-group end.// -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input type="text" class="form-control @error('userCity') is-invalid @enderror"
                                        name="userCity" placeholder="newyork, kolkata, dhaka" id="userCity">
                                    @error('userCity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div> <!-- form-group end.// -->
                                    <div class="form-group col-md-4">
                                        <label>Country</label>
                                        <select id="inputState" class="form-control @error('userstate') is-invalid @enderror" name="userstate">
                                            <option> Choose...</option>
                                            <option value="India">India</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Russia">Russia</option>
                                            <option selected="" value="United States">United States</option>
                                            <option value="China">China</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Canada">Canada</option>
                                        </select>
                                        @error('userstate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Zip</label>
                                        <input type="text" name="userzip" placeholder="ex: 1100"
                                        class="form-control @error('userzip') is-invalid @enderror" id="userzip">
                                    @error('userzip')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <!-- form-group end.// -->
                                </div> <!-- form-row.// -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Create password</label>
                                        <input type="password" name="password" placeholder="strongest password"
                                        class="form-control @error('password') is-invalid @enderror" id="password" required
                                        autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div> <!-- form-group end.// -->
                                    <div class="form-group col-md-6">
                                        <label>Repeat password</label>
                                        <input type="password" class="form-control" placeholder="Retype password"
                                        name="password_confirmation" id="password-confirm" required
                                        autocomplete="new-password">
                                    </div> <!-- form-group end.// -->
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input class="form-control @error('proimage') is-invalid @enderror"
                                            name="proimage" id="proimage" type="file">
                                        @error('proimage')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"> Register </button>
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox"> 
                                        <input type="checkbox"
                                            class="custom-control-input @error('check') is-invalid @enderror"
                                            name="check" id="check" type="checkbox" id="check" required
                                            autocomplete="check">
                                        <span class="custom-control-label"> I am agree with <a href="#">terms and
                                                contitions</a> </span>
                                                @error('check')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <p class="small mb-0 text-center">{{ __('Already have an account?') }} <a
                                        href="{{ route('login') }}">{{ __('Log in') }}</a></p>
                                </div> <!-- form-group end.// -->
                            </form>
                        </article><!-- card-body.// -->
                    </div>
                    <!-- end register -->
                </div>
            </div>
        </div>
    </section>
    <!-- end register -->



@endsection
