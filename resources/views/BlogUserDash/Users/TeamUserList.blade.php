@extends('layouts.BlogUserMaster')
@section('title', 'Team Users List - HowTinue')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>{{ Session::get('team_name') }} Team Users List</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blogusr.users') }}">Users</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blogusr.users.allteam') }}">Team</a></li>
        <li class="breadcrumb-item active">Team Users List</li>
    </ol>
    </nav>
</div>

<div class="section">
    <div class="row">
        <div class="col-md-8 m-auto">
            <a class=" btn btn-outline-info" href="{{ route('blogusr.users') }}">Add User</a>
        </div>
    </div>
</div>

<div class="section">
    <div class="row">
        <div class="col-md-10 m-auto">
            {{-- @php
                print_r($teamNameI)
            @endphp --}}
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Users List</h5>
            
                  <table class="table table-hover datatable table-sm">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Verified</th>
                        <th scope="col">Status</th>
                        <th scope="col">Team</th>
                        <th >Register</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
            
                        @foreach ($teamNameI as $userTeam)
                      {{-- <tr class="table-{{ $basuser->block == 0 ? 'light':'danger' }}"> --}}
                        
                        <th scope="row"><a href="#">#{{  $userTeam->id  }}</a></td>
                        <td>{{ $userTeam->name }}</td>
                        <td><a class="" href=""><span>@</span>{{ $userTeam->username }}</a></td>
                        <td>{{ Str::limit($userTeam->email, 6) }}</td>
                        {{-- <td>@if ($basuser->email_verified == 1) <i class="bi bi-patch-check-fill text-primary"></i> @else <i class="bi bi-patch-exclamation text-danger"></i> @endif</td> --}}
            
                        <td><a href="" class="badge rounded-pill bg-{{ $userTeam->block == 0 ? 'success':'danger' }}"> @if ($userTeam->block == 0) <span class="text-white"><i class="bi bi-person-check-fill"></i></span> @else <span class="text-white"><i class="bi bi-person-x-fill"></i></span>  @endif</a></td>
                        <td><span class="badge rounded-pill bg-info">{{ $userTeam->teamname }}</span></td>
                        {{-- <td>{{ $userTeam->created_at->diffForHumans() }}</td> --}}
                        <td><a class="text-success" href=""><i class="bi bi-pencil-square"></i></a><span>&nbsp;&nbsp;</span><a class="text-danger" href=""><i class="bi bi-trash"></i></a></td>
                      </tr>
                      @endforeach
            
                    </tbody>
                </table>
                </div>
            </div> 
        </div>
        {{-- <div class="col-lg-4">
      @foreach ( as )
          
      
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
          @endforeach --}}
    </div>
</div>

@endsection
