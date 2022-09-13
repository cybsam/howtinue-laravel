@extends('layouts.SupUserMaster')
@section('title', 'Users - HowTinue')
@section('SupUserContent')
<link rel="stylesheet" href="{{ asset('datatables/dataTables.min.css') }}">

<div class="pagetitle">
    <h1>Users Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Home</a></li>

        <li class="breadcrumb-item active">List Users</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Users List</h5>

      <!-- Default Tabs -->
      <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
        <li class="nav-item flex-fill" role="presentation">
          <button class="nav-link text-center w-100 active" id="home-tab" href="" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">Super Admins</button>

        </li>
        <li class="nav-item flex-fill" role="presentation">
          <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">Blogger</button>
        </li>
        <li class="nav-item flex-fill" role="presentation">
          <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="false">Users</button>
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
                <th scope="col">Team</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>


                @foreach ($SupUsers as $SupUser)
              <tr class="table-{{ $SupUser->block == 0 ? 'light':'warning' }}">
                <th scope="row"><a href="#">#{{  $SupUser->id  }}</a></td>
                <td>{{ $SupUser->name }}</a></td>
                <td><a class="" href=""><span>@</span>{{ $SupUser->username }}</a></td>
                <td>{{ $SupUser->email }}</td>
                <td>@if ($SupUser->email_verified == 1) <i class="bi bi-patch-check-fill text-primary"></i> @else <i class="bi bi-patch-exclamation text-danger"></i> @endif</td>
                <td>{{ $SupUser->team }}</td>
                <td><a href="" class="badge rounded-pill bg-{{ $SupUser->block == 0 ? 'success':'danger' }}"> @if ($SupUser->block == 0) <span class="text-white"><i class="bi bi-person-check-fill"></i></span> @else <span class="text-white"><i class="bi bi-person-x-fill"></i></span> @endif</a></td>
                <td><a class="text-success" href=""><i class="bi bi-pencil-square"></i></a><span>&nbsp;&nbsp;</span><a class="text-danger" href=""><i class="bi bi-trash"></i></a></td>
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
                    <th scope="col">Team</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($blogUsers as $blogUser)
                  <tr class="table-{{ $blogUser->block == 0 ? 'light':'warning' }}">
                    <th scope="row"><a href="#">#{{  $blogUser->id  }}</a></td>
                    <td>{{ $blogUser->name }}</td>
                    <td><a class="" href=""><span>@</span>{{ $blogUser->username }}</a></td>
                    <td>{{ Str::limit($blogUser->email, 6) }}</td>
                    <td>@if ($blogUser->email_verified == 1) <i class="bi bi-patch-check-fill text-primary"></i> @else <i class="bi bi-patch-exclamation text-danger"></i> @endif</td>
                    <td>{{ $blogUser->team }}</td>
                    <td><a href="" class="badge rounded-pill bg-{{ $blogUser->block == 0 ? 'success':'danger' }}"> @if ($blogUser->block == 0) <span class="text-white"><i class="bi bi-person-check-fill"></i></span> @else <span class="text-white"><i class="bi bi-person-x-fill"></i></span> @endif</a></td>
                    <td><a class="text-success" href=""><i class="bi bi-pencil-square"></i></a><span>&nbsp;&nbsp;</span><a class="text-danger" href=""><i class="bi bi-trash"></i></a></td>
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
                    <th >Register</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($basusers as $basuser)
                  <tr class="table-{{ $basuser->block == 0 ? 'light':'danger' }}">
                    <th scope="row"><a href="#">#{{  $basuser->id  }}</a></td>
                    <td>{{ $basuser->name }}</td>
                    <td><a class="" href=""><span>@</span>{{ $basuser->username }}</a></td>
                    <td>{{ Str::limit($basuser->email, 6) }}</td>
                    <td>@if ($basuser->email_verified == 1) <i class="bi bi-patch-check-fill text-primary"></i> @else <i class="bi bi-patch-exclamation text-danger"></i> @endif</td>
                    <td><a href="" class="badge rounded-pill bg-{{ $basuser->block == 0 ? 'success':'danger' }}"> @if ($basuser->block == 0) <span class="text-white"><i class="bi bi-person-check-fill"></i></span> @else <span class="text-white"><i class="bi bi-person-x-fill"></i></span>  @endif</a></td>
                    <td>{{ $basuser->created_at->diffForHumans() }}</td>
                    <td><a class="text-success" href=""><i class="bi bi-pencil-square"></i></a><span>&nbsp;&nbsp;</span><a class="text-danger" href=""><i class="bi bi-trash"></i></a></td>
                  </tr>
                  @endforeach

                </tbody>
            </table>

        </div>
      </div><!-- End Default Tabs -->

    </div>
  </div>







    </div>
  </div>


@endsection


