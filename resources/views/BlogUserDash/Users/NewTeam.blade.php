@extends('layouts.BlogUserMaster')
@section('title', 'Team: Modarator - HowTinue')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>Team Management</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blogusr.users') }}">Users</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blogusr.users.allteam') }}">Team</a></li>
        <li class="breadcrumb-item active">New Team</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<div class="row">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">New Team Information</h5>
              @if ($errors->all())
                    <span class="text-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </span>
                @endif
                
              <form class="row g-3" action="{{ route('blogusr.users.allteam.newteam.insert') }}" method="POST">
                  @csrf
                <div class="col-md-12">
                  <label for="inputTeamName" class="form-label">Team Name</label>
                  <input type="text" class="form-control @error('teamname') is-invalid @enderror" value="{{ old('teamname') }}" name="teamname" placeholder="eg: technology, food, devices etc" id="teamname">
                  
                </div>
                <div class="col-md-6">
                  <label for="inputUserName" class="form-label">Moderator Name</label>
                  <input type="email" class="form-control" name="admin_name" value="{{ Auth::user()->name; }}" id="admin_name"  readonly>
                </div>
                <div class="col-md-6">
                  <label for="inputUserEmail" class="form-label">Moderator Email</label>
                  <input type="email" class="form-control" name="admin_email" value="{{ Auth::user()->email; }}" id="admin_email" readonly>
                </div>
                <input type="hidden" name="admin_id" id="admin_id" value="{{ Auth::user()->id; }}">
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">New Team</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
        
            </div>
          </div>
    </div>
</div>







@endsection
