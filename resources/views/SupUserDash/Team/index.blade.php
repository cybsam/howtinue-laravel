@extends('layouts.SupUserMaster')
@section('title', 'Team - HowTinue')
@section('SupUserContent')

<div class="pagetitle">
    <h1>Team Management</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('supuser.listuser') }}">Users</a></li>
        <li class="breadcrumb-item active">Team</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
        {{-- @if ( Session::get('success') )
        <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif --}}
        @foreach ($listTeam as $teamin)
            
       
      <div class="col-lg-4">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $teamin->admin_name }}'s &nbsp; => {{ $teamin->teamname }} </h5>

            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="" class="btn btn-outline-primary ">Users</a>
                <a href="" class="btn btn-outline-warning ">Information</a>
                <a href="" class="btn btn-outline-secondary">Right</a>
              </div>

          </div>
        </div>
      </div>
      @endforeach
      
    </div>
</section>

  
@endsection