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
  </div>


@endsection
