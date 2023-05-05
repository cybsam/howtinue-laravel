@extends('layouts.BasUserMaster')
@section('FrontTitle', 'User Profile - HealthyBotic')
@section('basUser')

<section class="pb-80">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              
              <ul class="breadcrumbs bg-light mb-4">
                  <li class="breadcrumbs__item">
                      <a href="{{ route('basUser.dashboard') }}" class="breadcrumbs__url">
                          <i class="fa fa-home"></i> Dashboard</a>
                  </li>
                  
                  <li class="breadcrumbs__item breadcrumbs__item--current">
                      User Profile
                  </li>
              </ul>
              <!-- end breadcrumb -->
          </div>

          <div class="col-xl-4">

            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
    
                <img src="{{ asset('SupUser/uploads/usersimage') }}/{{ Auth::user()->proimage }}" alt="Profile" class="rounded-circle">
                <h2>{{ Str::title(Auth::user()->name) }}</h2>
                <h3>Healthy Botic</h3>
    
                <div class="social-links mt-2">
                  <a href="{{ $dbTwitter }}" target="blank" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="{{ $dbFacebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="{{ $dbInstagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="{{ $dbLinkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
    
          </div>
    
          <div class="col-xl-8">
    
            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
    
    
                <ul class="nav nav-tabs nav-tabs-bordered">
    
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ route('basUser.dashboardprofile') }}" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</a>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link " href="{{ route('basUser.profileUpdate') }}" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</a>
                  </li>
    
    
                  <li class="nav-item">
                    <a class="nav-link " href="{{ route('basUser.profileUpdatePassword') }}" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</a>
                  </li>
    
                </ul>
                <div class="tab-content pt-2">
                    
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                      
                    <h5 class="card-title">About</h5>
                    <p class="small fst-italic">@if ($aboutUser)
                        {{ $aboutUser }} @else {{ __('Nothing To Display') }}
                    @endif</p>
    
                    <h5 class="card-title">Profile Details</h5>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Full Name</div>
                      <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Company</div>
                      <div class="col-lg-9 col-md-8">{{ $company }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Job</div>
                      <div class="col-lg-9 col-md-8">{{ $jobtitle }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Country</div>
                      <div class="col-lg-9 col-md-8">{{ $dbCountry }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Address</div>
                      <div class="col-lg-9 col-md-8">{{ $dbAddress }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Phone</div>
                      <div class="col-lg-9 col-md-8">(436) {{ $dbPhone }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                    </div>
    
                  </div>
    
                  
    
                  
    
                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form action="{{ route('supuser.profileupdate.pass.dashboard') }}" method="POST">
                        @csrf
                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="oldpassword" type="password" placeholder="Current Password" class="form-control @error('oldpassword') is-invalid @enderror" id="oldpassword">
                            <div class="">
                                @error('oldpassword')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
    
                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password" type="password" placeholder="New Password" class="form-control @error('password') is-invalid @enderror" id="password">
                          <div class="">
                            @error('password')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        </div>
                      </div>
    
                      <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password_confirmation" type="password" placeholder="Re-enter New Password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
                          <div class="">
                            @error('password_confirmation')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        </div>
                      </div>
    
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                      </div>
                    </form><!-- End Change Password Form -->
    
                  </div>
    
                </div><!-- End Bordered Tabs -->
    
              </div>
            </div>
    
          </div>

      </div>
  </div>
</section>





@endsection