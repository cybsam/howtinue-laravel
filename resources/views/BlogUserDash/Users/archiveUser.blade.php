@extends('layouts.BlogUserMaster')
@section('title', 'User Profile - HowTinue')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>User Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('supuser.listuser') }}">Users</a></li>
        <li class="breadcrumb-item active">Archive Users</li>
      </ol>
    </nav>
  </div>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Archive Users</h5>
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
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">Register</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($userArchive as $archive)
          <tr>
            <th scope="row"><a href="">{{ $archive->id }}</a></th>
            <td>{{ $archive->name }}</td>
            <td>{{ $archive->email }}</td>
            <td><a href="" class="badge rounded-pill bg-{{ $archive->block == 0 ? 'success':'danger' }}"> @if ($archive->block == 0) <span class="text-white"><i class="bi bi-person-check-fill"></i></span> @else <span class="text-white"><i class="bi bi-person-x-fill"></i></span> @endif</a></td>
            <td>{{ $archive->updated_at->diffForHumans() }}</td>
            <td><a class="btn btn-info btn-sm" href="{{ route('restoreArchiveUser',['user_id'=>$archive->id]) }}">Restore</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      

    </div>
  </div>



@endsection
