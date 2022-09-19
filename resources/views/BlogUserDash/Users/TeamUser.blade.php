@extends('layouts.BlogUserMaster')
@section('title', 'Team: Modarator - HowTinue')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>Team Management</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blogusr.users') }}">Users</a></li>
        <li class="breadcrumb-item active">Users Team</li>
    </ol>
    </nav>
</div><!-- End Page Title -->


      <a class=" btn btn-outline-info" href="{{ route('blogusr.users.allteam.newteam') }}">New Team</a>

      <a class=" btn btn-outline-warning" href="#">Modified team</a>

        <a class="btn btn-outline-danger" href="#">Delete team</a>
        <hr>
        <section class="section">
            <div class="row">
                @if ( Session::get('success') )
                <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
                @foreach ($teamInfo as $teamin)
                    
               
              <div class="col-lg-4">
      
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">{{ $teamin->teamname }}</h5>
      
                    <div class="btn-group" role="group" aria-label="Basic example">
                      @php
                        $teamname = $teamin->teamname
                      @endphp
                      <a href="{{ route('blogusr.users.allteam.users',$teamname) }}" class="btn btn-outline-primary ">Users</a>
                      <a href="" class="btn btn-outline-warning ">Check Post</a>
                      <a href="" class="btn btn-outline-primary">Right</a>
                      </div>
      
                  </div>
                </div>
              </div>
              @endforeach
              
            </div>
        </section>






@endsection
