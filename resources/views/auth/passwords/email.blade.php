@extends('layouts.FrontEndMaster')
@section('FrontTitle', 'SignIn - Howtinue')
@section('FrontEnd')
    <section class="wrap__section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Login -->
                    <div class="card mx-auto" style="max-width: 380px">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Password Reset</h4>
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                               
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                   

                                   
                                    <!-- form-group form-check .// -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Send Password Reset Link') }}
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


