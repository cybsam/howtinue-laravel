@extends('layouts.SupUserMaster')
@section('title', 'Front Settings - HealthyBotic')
@section('SupUserContent')

<div class="pagetitle">
    <h1>Settings update</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Dashboard</a></li>
        {{-- <li class="breadcrumb-item">Pages</li> --}}
        <li class="breadcrumb-item active">Main Settings</li>
      </ol>
    </nav>
</div>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Main Settings</h5>
      @if (Session::get('succ'))
      <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
          {{ Session::get('succ') }}
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (Session::get('updateErr'))
      <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
          {{ Session::get('updateErr') }}
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <form action="{{ route('supuser.settingsMainUpdate') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Web-Site Name</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" readonly>
          </div>
          <div class="col-sm-5">
            <input type="text" placeholder="website name" class="form-control" value="{{ old('websitename') }}" name="websitename" id="websitename" >
            <div class="">
              @error('websitename')
                  <span class="text-danger">
                      {{ $message }}
                  </span>
              @enderror
          </div>
          </div>

        </div>


        <div class="row mb-3">
          <label for="inputNumber" class="col-sm-2 col-form-label">Favicon Icon</label>
          <div class="col-sm-4">
            <img src="{{ asset('FrontEnd/images/favicon/') }}/favicon.png" width="200" height="200" class="form-control" alt="">
          </div>
          <div class="col-sm-6">
            <input class="form-control" type="file" id="faviconicon" name="faviconicon">
            <div class="">
              @error('faviconicon')
                  <span class="text-danger">
                      {{ $message }}
                  </span>
              @enderror
          </div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputNumber" class="col-sm-2 col-form-label">Logo</label>
          <div class="col-sm-4">
            <img src="{{ asset('FrontEnd/images/icon/') }}/logo.png" width="200" height="200" class="form-control" alt="">
          </div>
          <div class="col-sm-6">
            <input class="form-control" type="file" id="logoIcon" name="logoIcon">
            <div class="">
              @error('logoIcon')
                  <span class="text-danger">
                      {{ $message }}
                  </span>
              @enderror
          </div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputNumber" class="col-sm-2 col-form-label"> Logo Footer</label>
          <div class="col-sm-4">
            <img src="{{ asset('FrontEnd/images/icon/') }}/logo-footer.png" width="200" height="200" class="form-control" alt="">
          </div>
          <div class="col-sm-6">
            <input class="form-control" type="file" id="logoFooter" name="logoFooter">
            <div class="">
              @error('logoFooter')
                  <span class="text-danger">
                      {{ $message }}
                  </span>
              @enderror
          </div>
          </div>
        </div>

        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                Active
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
              <label class="form-check-label" for="gridRadios2">
                inactive or test
              </label>
            </div>

          </div>
        </fieldset>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Save</label>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
          </div>
        </div>

      </form><!-- End General Form Elements -->

    </div>
  </div>

</div>

@endsection
