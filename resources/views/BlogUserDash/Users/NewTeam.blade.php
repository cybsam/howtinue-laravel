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
        
              
              <form class="row g-3" action="#" method="POST">
                  @csrf
                <div class="col-md-12">
                  <label for="inputTeamName" class="form-label">Team Name</label>
                  <input type="text" class="form-control" name="teamName" placeholder="eg: technology, food, devices etc" id="teamName">
                </div>
                <div class="col-md-6">
                  <label for="inputUserName" class="form-label">Moderator Name</label>
                  <input type="email" class="form-control" name="moderatorName" value="{{ Auth::user()->name; }}" id="moderatorName"  disabled>
                </div>
                <div class="col-md-6">
                  <label for="inputUserEmail" class="form-label">Moderator Email</label>
                  <input type="email" class="form-control" name="moderatorEmail" value="{{ Auth::user()->email; }}" id="moderatorEmail" disabled>
                </div>
                <input type="hidden" name="moderatorId" id="moderatorId" value="{{ Auth::user()->id; }}">
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
        
            </div>
          </div>
    </div>
</div>







@endsection
