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
                    <li class="breadcrumbs__item">
                        <a href="{{ route('basUser.dashboardprofile') }}" class="breadcrumbs__url">
                             Profile</a>
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                        Profile Update
                    </li>
                </ul>
                <!-- end breadcrumb -->
            </div>

            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="{{ asset('SupUser/uploads/usersimage') }}/{{ Auth::user()->proimage }}" alt="Profile"
                            class="rounded-circle">
                        <h2>{{ Str::title(Auth::user()->name) }}</h2>
                        <h3>healthy Botic</h3>

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
                                <a class="nav-link " href="{{ route('basUser.dashboardprofile') }}" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Overview</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('basUser.profileUpdate') }}" data-bs-toggle="tab"
                                    data-bs-target="#profile-edit">Update Profile</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('basUser.profileUpdatePassword') }}" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password">Change Password</a>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">
                            @if ($errors->all())
                                <span class="text-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </span>
                            @endif
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                @if (Session::get('success'))
                                    <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show"
                                        role="alert">
                                        {{ Session::get('success') }}
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                @if (Session::get('logfail'))
                                    <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show"
                                        role="alert">
                                        {{ Session::get('logfail') }}
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif


                                <h5 class="card-title">Profile Update</h5>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 m-auto mt-3">
                                            <form action="{{ route('basUser.profileUpdateSave') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row mb-3">
                                                    <label for="profileImage"
                                                        class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <img src="{{ asset('SupUser/uploads/usersimage') }}/{{ Auth::user()->proimage }}"
                                                            alt="Profile">
                                                        <div class="pt-2">
                                                            <a href="#" class="btn btn-primary btn-sm"
                                                                title="Upload new profile image"><i
                                                                    class="bi bi-upload"></i></a>
                                                            <a href="#" class="btn btn-danger btn-sm"
                                                                title="Remove my profile image"><i
                                                                    class="bi bi-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full
                                                        Name</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="changeFullName" type="text" class="form-control"
                                                            placeholder="Your Full Name" id="changeFullName"
                                                            value="{{ Str::title(Auth::user()->name) }}">
                                                        @error('changeFullName')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <input type="hidden" name="userId" id="userId"
                                                    value="{{ Auth::user()->id }}">
                                                <div class="row mb-3">
                                                    <label for="about"
                                                        class="col-md-4 col-lg-3 col-form-label">About</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <textarea name="UserAbout" class="form-control"
                                                            placeholder="Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.
                                                  "
                                                            id="UserAbout" style="height: 100px">{{ $aboutUser }}.</textarea>
                                                        @error('UserAbout')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="company"
                                                        class="col-md-4 col-lg-3 col-form-label">Company</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="company" type="text" class="form-control"
                                                            placeholder="HowTiune Inc" id="company"
                                                            value="{{ $company }}">
                                                        @error('company')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job
                                                        Title</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="jobTitle" type="text" class="form-control"
                                                            placeholder="Designer/Developer/Blogger" id="jobTitle"
                                                            value="{{ $jobtitle }}">
                                                        @error('jobTitle')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Country"
                                                        class="col-md-4 col-lg-3 col-form-label">Country</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="country" type="text" class="form-control"
                                                            placeholder="USA/UK/BD/ " id="Country"
                                                            value="{{ $dbCountry }}">
                                                        @error('country')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Address"
                                                        class="col-md-4 col-lg-3 col-form-label">Address</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="address" type="text" class="form-control"
                                                            placeholder="A108 Adam Street, New York, NY 535022"
                                                            id="address" value="{{ $dbAddress }}">
                                                        @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Phone"
                                                        class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="phone" type="text" class="form-control"
                                                            id="Phone" placeholder="(436) 486-3538 x29071"
                                                            value=" {{ $dbPhone }}">
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>



                                                <div class="row mb-3">
                                                    <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter
                                                        Profile</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="twitter" type="text" class="form-control"
                                                            id="twitter" placeholder="https://twitter.com/your-account"
                                                            value="{{ $dbTwitter }}">
                                                        @error('twitter')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Facebook"
                                                        class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="facebook" type="text" class="form-control"
                                                            id="facebook" placeholder="https://facebook.com/your-account"
                                                            value="{{ $dbFacebook }}">
                                                        @error('facebook')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Instagram"
                                                        class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="instagram" type="text" class="form-control"
                                                            id="instagram"
                                                            placeholder="https://instagram.com/your-account"
                                                            value="{{ $dbInstagram }}">
                                                        @error('instagram')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Linkedin"
                                                        class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="linkedin" type="text" class="form-control"
                                                            id="linkedin" placeholder="https://linkedin.com/your-account"
                                                            value="{{ $dbLinkedin }}">
                                                        @error('linkedin')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>





                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form action="{{ route('supuser.profileupdate.pass.dashboard') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="oldpassword" type="password" placeholder="Current Password"
                                                class="form-control @error('oldpassword') is-invalid @enderror"
                                                id="oldpassword">
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
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" placeholder="New Password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="password">
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
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password_confirmation" type="password"
                                                placeholder="Re-enter New Password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                id="password_confirmation">
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
                                </form>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>




@endsection
