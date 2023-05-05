@extends('layouts.BlogUserMaster')
@section('title', 'Team: Modarator - HowTinue')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>List Users</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Users</li>
    </ol>
    </nav>
</div><!-- End Page Title -->


<div class="card">
  <div class="card-body">
    <h5 class="card-title">Users List</h5>

    @if (Session::get('succ'))
                  <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
                    {{ Session::get('succ') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  @if (Session::get('err'))
                  <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                    {{ Session::get('err') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
    <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
      <li class="nav-item flex-fill" role="presentation">
        <button class="nav-link text-center w-100 active" id="home-tab" href="" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">Users</button>

      </li>
      <li class="nav-item flex-fill" role="presentation">
        <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">Blogger</button>
      </li>
      <li class="nav-item flex-fill" role="presentation">
        <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="false">Super Admin</button>
      </li>
    </ul>
    <div class="tab-content pt-2" id="myTabjustifiedContent">
      <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">


        <table class="table table-hover datatable table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Verified</th>
              
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>


              @foreach ($basicUser as $basicUser)
            <tr class="table-{{ $basicUser->block == 0 ? 'light':'warning' }}">
              <th scope="row"><a href="#">#{{  $basicUser->id  }}</a></td>
              <td>{{ $basicUser->name }}</a></td>
              <td><a class="" href=""><span>@</span>{{ $basicUser->username }}</a></td>
              <td>{{ $basicUser->email }}</td>
              <td>@if ($basicUser->email_verified == 1) <i class="bi bi-patch-check-fill text-primary"></i> @else <i class="bi bi-patch-exclamation text-danger"></i> @endif</td>
              
              <td><a href="" class="badge rounded-pill bg-{{ $basicUser->block == 0 ? 'success':'danger' }}"> @if ($basicUser->block == 0) <span class="text-white"><i class="bi bi-person-check-fill"></i></span> @else <span class="text-white"><i class="bi bi-person-x-fill"></i></span> @endif</a></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <a href="{{ route('updateUserBlogger',['user_id'=>$basicUser->id]) }}" class="btn btn-success btn-sm">Update</a>
                  <a href="{{ route('blogusr.archivePost',['user_id'=>$basicUser->id]) }}" class="btn btn-warning btn-sm">Archive</a>
                  
                </div>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
          <table class="table table-hover datatable table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Verified</th>
                 
                  <th scope="col">Status</th>
                  
                </tr>
              </thead>
              <tbody>

                  @foreach ($Blogger as $blogUser)
                <tr class="table-{{ $blogUser->block == 0 ? 'light':'warning' }}">
                  <th scope="row"><a href="#">#{{  $blogUser->id  }}</a></td>
                  <td>{{ $blogUser->name }}</td>
                  <td><a class="" href=""><span>@</span>{{ $blogUser->username }}</a></td>
                  <td>{{ Str::limit($blogUser->email, 6) }}</td>
                  <td>@if ($blogUser->email_verified == 1) <i class="bi bi-patch-check-fill text-primary"></i> @else <i class="bi bi-patch-exclamation text-danger"></i> @endif</td>
                  
                  <td><a href="" class="badge rounded-pill bg-{{ $blogUser->block == 0 ? 'success':'danger' }}"> @if ($blogUser->block == 0) <span class="text-white"><i class="bi bi-person-check-fill"></i></span> @else <span class="text-white"><i class="bi bi-person-x-fill"></i></span> @endif</a></td>
                  </tr>
                @endforeach

              </tbody>
          </table>
      </div>
      <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
          <table class="table table-hover datatable table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Verified</th>
                  
                  <th scope="col">Status</th>
                  
                </tr>
              </thead>
              <tbody>

                  @foreach ($SuperAdmin as $SuperAdmin)
                <tr class="table-{{ $SuperAdmin->block == 0 ? 'light':'danger' }}">
                  <th scope="row"><a href="#">#{{  $SuperAdmin->id  }}</a></td>
                  <td>{{ $SuperAdmin->name }}</td>
                  <td><a class="" href=""><span>@</span>{{ $SuperAdmin->username }}</a></td>
                  <td>{{ Str::limit($SuperAdmin->email, 6) }}</td>
                  <td>@if ($SuperAdmin->email_verified == 1) <i class="bi bi-patch-check-fill text-primary"></i> @else <i class="bi bi-patch-exclamation text-danger"></i> @endif</td>
                 
                  <td><a href="" class="badge rounded-pill bg-{{ $SuperAdmin->block == 0 ? 'success':'danger' }}"> @if ($SuperAdmin->block == 0) <span class="text-white"><i class="bi bi-person-check-fill"></i></span> @else <span class="text-white"><i class="bi bi-person-x-fill"></i></span>  @endif</a></td>
                  
                  
                  </tr>
                @endforeach

              </tbody>
          </table>

      </div>
    </div><!-- End Default Tabs -->

  </div>
</div>

@endsection
